<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Form\CommandeType;
use App\Repository\CommandeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Entity\Medicament;
use App\Entity\LigneCommande;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface; // Correct import
use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Notifier\Notification\Notification;
use Symfony\Component\Notifier\Recipient\Recipient;
use Symfony\Component\HttpFoundation\JsonResponse;
#[Route('/commande')]
#[IsGranted('ROLE_PATIENT')]
class CommandeController extends AbstractController
{
    private $notifier;
    private $adminPhoneNumber;

    public function __construct(NotifierInterface $notifier, string $adminPhoneNumber)
    {
        $this->notifier = $notifier;
        $this->adminPhoneNumber = $adminPhoneNumber;    }
    #[Route('/', name: 'app_commande_index', methods: ['GET'])]
    #[IsGranted('ROLE_PATIENT')]
    public function index(CommandeRepository $commandeRepository, PaginatorInterface $paginator, Request $request): Response
    {
        // Construire une requête Doctrine pour filtrer les commandes du patient connecté
        $query = $commandeRepository->createQueryBuilder('c')
        ->where('c.patient = :patient')
        ->setParameter('patient', $this->getUser()) // Lier le paramètre :patient
        ->orderBy('CASE WHEN c.status = :status THEN 0 ELSE 1 END', 'ASC') // Priorité aux commandes "en_attente"
        ->addOrderBy('c.date_commande', 'DESC') // Tri secondaire par date décroissante
        ->setParameter('status', 'en_attente') // Lier le paramètre :status
        ->getQuery();
        // Paginer les résultats
        $pagination = $paginator->paginate(
            $query, // RequêteDoctrine
            $request->query->getInt('page', 1), // Numéro de page actuelle
            3 // Nombre d'éléments par page
        );
    
        return $this->render('commande/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }
    

   
    #[Route('/new', name: 'app_commande_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_PATIENT')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $commande = new Commande();
        $commande->setPatient($this->getUser());
        $commande->setStatus('en_attente');
        $commande->setDateCommande(new \DateTime());
        
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);
    
        // Récupérer uniquement les médicaments avec une quantité en stock supérieure à 0
        $medicaments = $entityManager->getRepository(Medicament::class)
            ->createQueryBuilder('m')
            ->where('m.quantite_stock > 0')
            ->getQuery()
            ->getResult();
    
        if ($form->isSubmitted() && $form->isValid()) {
            $hasItems = false;
            $hasError = false;
    
            foreach ($medicaments as $medicament) {
                $quantite = $form->get('quantite_' . $medicament->getId())->getData();
                if ($quantite > 0) {
                    // Vérifier si la quantité demandée dépasse le stock disponible
                    if ($quantite > $medicament->getQuantiteStock()) {
                        $this->addFlash('error', 'La quantité demandée pour le médicament "' . $medicament->getNom() . '" dépasse le stock disponible. Stock disponible = ' . $medicament->getQuantiteStock());
                        $hasError = true;
                        break;
                    }
    
                    $hasItems = true;
                    $ligneCommande = new LigneCommande();
                    $ligneCommande->setCommande($commande);
                    $ligneCommande->setMedicament($medicament);
                    $ligneCommande->setQuantite($quantite);
                    $commande->addLigneCommande($ligneCommande);
                    $entityManager->persist($ligneCommande);
                    $newStock = $medicament->getQuantiteStock() - $quantite;
                    $medicament->setQuantiteStock($newStock);
                    $entityManager->persist($medicament);

                    // Send SMS if stock reaches zero
                    if ($newStock === 0) {
                        $this->sendStockZeroNotification($medicament->getNom());
                    }
                }
            }
    
            // Si une erreur est survenue, on ne passe pas la commande
            if ($hasError) {
                return $this->render('commande/new.html.twig', [
                    'form' => $form->createView(),
                    'medicaments' => $medicaments
                ]);
            }
    
            // Si aucun médicament n'a été sélectionné
            if (!$hasItems) {
                $this->addFlash('error', 'Veuillez sélectionner au moins un médicament.');
                return $this->render('commande/new.html.twig', [
                    'form' => $form->createView(),
                    'medicaments' => $medicaments
                ]);
            }
    
            // Si tout est bon, on persiste la commande
            $entityManager->persist($commande);
            $entityManager->flush();

            $this->forward('App\Controller\MailingController::sendMail', [
                'id' => $commande->getId(),
            ]);
    
            $this->addFlash('success', 'Votre commande a été créée avec succès.');
            return $this->redirectToRoute('app_commande_index');
        }
    
        return $this->render('commande/new.html.twig', [
            'form' => $form->createView(),
            'medicaments' => $medicaments
        ]);
    }
    

    #[Route('/{id}', name: 'app_commande_show', methods: ['GET'])]
    #[IsGranted('ROLE_PATIENT')]
    public function show(Commande $commande): Response
    {
        if ($commande->getPatient() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous n\'avez pas accès à cette commande.');
        }

        return $this->render('commande/show.html.twig', [
            'commande' => $commande,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_commande_edit', methods: ['GET', 'POST'])]
#[IsGranted('ROLE_PATIENT')]
public function edit(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
{
    // Vérifier que l'utilisateur a le droit de modifier cette commande
    if ($commande->getPatient() !== $this->getUser()) {
        throw $this->createAccessDeniedException('Vous n\'avez pas accès à cette commande.');
    }

    $form = $this->createForm(CommandeType::class, $commande);

    // Récupérer uniquement les médicaments avec une quantité en stock supérieure à 0
    $medicaments = $entityManager->getRepository(Medicament::class)
        ->createQueryBuilder('m')
        ->where('m.quantite_stock > 0')
        ->getQuery()
        ->getResult();

    // Pré-remplir les quantités existantes dans le formulaire
    foreach ($medicaments as $medicament) {
        $quantity = 0;
        foreach ($commande->getLigneCommandes() as $ligneCommande) {
            if ($ligneCommande->getMedicament() === $medicament) {
                $quantity = $ligneCommande->getQuantite();
                break;
            }
        }
        $form->get('quantite_' . $medicament->getId())->setData($quantity);
    }

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $hasItems = false;
        $hasError = false;

        // Stocker les quantités précédentes pour ajuster le stock
        $previousQuantities = [];
        foreach ($commande->getLigneCommandes() as $ligneCommande) {
            $previousQuantities[$ligneCommande->getMedicament()->getId()] = $ligneCommande->getQuantite();
        }

        // Supprimer les anciennes lignes de commande et réinitialiser les totaux
        foreach ($commande->getLigneCommandes() as $ligneCommande) {
            $commande->removeLigneCommande($ligneCommande); // Met à jour les totaux
            $entityManager->remove($ligneCommande); // Supprime de la base
        }
        $commande->getLigneCommandes()->clear(); // Vider la collection
        $commande->setQuantiteTotal(0); // Réinitialiser manuellement après suppression
        $commande->setMontantTotal(0.0);

        // Ajouter les nouvelles lignes et ajuster le stock
        foreach ($medicaments as $medicament) {
            $quantite = $form->get('quantite_' . $medicament->getId())->getData();
            if ($quantite > 0) {
                // Vérifier si la quantité demandée dépasse le stock disponible
                $previousQty = $previousQuantities[$medicament->getId()] ?? 0;
                $stockAjuste = $medicament->getQuantiteStock() + $previousQty;
                if ($quantite > $stockAjuste) {
                    $this->addFlash('error', 'La quantité demandée pour le médicament "' . $medicament->getNom() . '" dépasse le stock disponible. Stock disponible = ' . $stockAjuste);
                    $hasError = true;
                    break;
                }

                $hasItems = true;
                $ligneCommande = new LigneCommande();
                $ligneCommande->setMedicament($medicament);
                $ligneCommande->setQuantite($quantite);
                $commande->addLigneCommande($ligneCommande); // Met à jour les totaux
                $entityManager->persist($ligneCommande);

                $newStock = $stockAjuste - $quantite;
                    $medicament->setQuantiteStock($newStock);
                    $entityManager->persist($medicament);

                    // Send SMS if stock reaches zero
                    if ($newStock === 0) {
                        $this->sendStockZeroNotification($medicament->getNom());
                    }
            }
        }

        // Si une erreur est survenue, recharger le formulaire
        if ($hasError) {
            return $this->render('commande/edit.html.twig', [
                'commande' => $commande,
                'form' => $form->createView(),
                'medicaments' => $medicaments,
            ]);
        }

        // Si aucun médicament n'a été sélectionné
        if (!$hasItems) {
            $this->addFlash('error', 'Veuillez sélectionner au moins un médicament.');
            return $this->render('commande/edit.html.twig', [
                'commande' => $commande,
                'form' => $form->createView(),
                'medicaments' => $medicaments,
            ]);
        }

        // Persister les modifications
        $entityManager->persist($commande);
        $entityManager->flush();

        $this->forward('App\Controller\MailingController::sendMail', [
            'id' => $commande->getId(),
        ]);

        $this->addFlash('success', 'La commande a été modifiée avec succès.');
        return $this->redirectToRoute('app_commande_index');
    }

    return $this->render('commande/edit.html.twig', [
        'commande' => $commande,
        'form' => $form->createView(),
        'medicaments' => $medicaments,
    ]);
}

    #[Route('/{id}', name: 'app_commande_delete', methods: ['POST'])]
    #[IsGranted('ROLE_PATIENT')]
    public function delete(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
        // Vérifier que l'utilisateur connecté est bien le propriétaire de la commande
        if ($commande->getPatient() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous n\'avez pas accès à cette commande.');
        }

        // Vérifier que l'état de la commande est "en attente"
        if ($commande->getStatus() !== 'en_attente') {
            $this->addFlash('error', 'Vous ne pouvez pas supprimer une commande qui n\'est pas en attente.');
            return $this->redirectToRoute('app_commande_index');
        }

        if ($this->isCsrfTokenValid('delete'.$commande->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commande);
            $entityManager->flush();

            $this->addFlash('success', 'Commande supprimée avec succès.');
        }

        return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/admin/commande', name: 'app_admin_commande_index', methods: ['GET'])]
    public function adminIndex(CommandeRepository $commandeRepository): Response
    {
        return $this->render('commande/confirmation.html.twig', [
            'commandes' => $commandeRepository->findAll(),
        ]);
    }

    #[Route('/admin/commande/{id}/confirm', name: 'app_admin_commande_confirm', methods: ['POST'])]
    public function confirm(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('confirm'.$commande->getId(), $request->request->get('_token'))) {
            $commande->setStatus('confirmé');
            $entityManager->flush();

            $this->forward('App\Controller\MailingController::sendMail', [
                'id' => $commande->getId(),
                'confirmation' => true 
            ]);
            
        }

        return $this->redirectToRoute('app_admin_commande_index');
    }

    #[Route('/{id}/rate', name: 'app_commande_rate', methods: ['POST'])]
    public function rate(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
        $rate = (int) $request->request->get('rate');
        if ($rate >= 1 && $rate <= 5) {
            $commande->setRate($rate);
            $entityManager->flush();

            return $this->json([
                'success' => true,
                'message' => 'Merci pour votre évaluation !',
                'rate' => $rate
            ]);
        }

        return $this->json([
            'success' => false,
            'message' => 'Veuillez sélectionner une note valide.'
        ], Response::HTTP_BAD_REQUEST);
    }

    private function sendStockZeroNotification(string $medicamentNom): void
    {
        $message = "Alerte stock : Le médicament '$medicamentNom' est maintenant en rupture de stock (quantité = 0).";
        $notification = (new Notification($message, ['sms']))
            ->importance(Notification::IMPORTANCE_HIGH);

        $recipient = new Recipient('', $this->adminPhoneNumber);

        try {
            $this->notifier->send($notification, $recipient);
            $this->addFlash('success', "Notification SMS envoyée : $message");
        } catch (\Exception $e) {
            $this->addFlash('error', "Erreur lors de l'envoi de la notification SMS : " . $e->getMessage());
        }
    }



}