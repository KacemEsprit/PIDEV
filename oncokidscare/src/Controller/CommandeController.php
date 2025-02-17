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
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Entity\Medicament;
use App\Entity\LigneCommande;

#[Route('/commande')]
class CommandeController extends AbstractController
{
    #[Route('/', name: 'app_commande_index', methods: ['GET'])]
    #[IsGranted('ROLE_PATIENT')]
    public function index(CommandeRepository $commandeRepository): Response
    {
        return $this->render('commande/index.html.twig', [
            'commandes' => $commandeRepository->findBy(['patient' => $this->getUser()]),
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

        if ($form->isSubmitted() && $form->isValid()) {
            $medicaments = $entityManager->getRepository(Medicament::class)->findAll();
            $hasItems = false;

            foreach ($medicaments as $medicament) {
                $quantite = $form->get('quantite_' . $medicament->getId())->getData();
                if ($quantite > 0) {
                    $hasItems = true;
                    $ligneCommande = new LigneCommande();
                    $ligneCommande->setCommande($commande);
                    $ligneCommande->setMedicament($medicament);
                    $ligneCommande->setQuantite($quantite);
                    $commande->addLigneCommande($ligneCommande);
                    $entityManager->persist($ligneCommande);
                }
            }

            if (!$hasItems) {
                $this->addFlash('error', 'Veuillez sélectionner au moins un médicament.');
                return $this->render('commande/new.html.twig', [
                    'form' => $form->createView(),
                    'medicaments' => $medicaments
                ]);
            }

            $entityManager->persist($commande);
            $entityManager->flush();

            $this->addFlash('success', 'Votre commande a été créée avec succès.');
            return $this->redirectToRoute('app_commande_index');
        }

        return $this->render('commande/new.html.twig', [
            'form' => $form->createView(),
            'medicaments' => $entityManager->getRepository(Medicament::class)->findAll()
        ]);
    }

    #[Route('/{id}', name: 'app_commande_show', methods: ['GET'])]
    #[IsGranted('ROLE_PATIENT')]
    #[IsGranted('VIEW', subject: 'commande')]
    public function show(Commande $commande): Response
    {
        // Vérifier que l'utilisateur connecté est bien le propriétaire de la commande
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
        $form = $this->createForm(CommandeType::class, $commande);
        
        // Pre-fill quantities
        $medicaments = $entityManager->getRepository(Medicament::class)->findAll();
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
            // Remove existing ligne commandes
            foreach ($commande->getLigneCommandes() as $ligneCommande) {
                $entityManager->remove($ligneCommande);
            }
            
            // Add new ligne commandes
            $hasItems = false;
            foreach ($medicaments as $medicament) {
                $quantite = $form->get('quantite_' . $medicament->getId())->getData();
                if ($quantite > 0) {
                    $hasItems = true;
                    $ligneCommande = new LigneCommande();
                    $ligneCommande->setCommande($commande);
                    $ligneCommande->setMedicament($medicament);
                    $ligneCommande->setQuantite($quantite);
                    $commande->addLigneCommande($ligneCommande);
                    $entityManager->persist($ligneCommande);
                }
            }
    
            if (!$hasItems) {
                $this->addFlash('error', 'La commande doit contenir au moins un médicament.');
                return $this->redirectToRoute('app_commande_edit', ['id' => $commande->getId()]);
            }
    
            $entityManager->flush();
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
    #[IsGranted('DELETE', subject: 'commande')]
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
        return $this->render('commande/admin_index.html.twig', [
            'commandes' => $commandeRepository->findAll(),
        ]);
    }

    #[Route('/admin/commande/{id}/confirm', name: 'app_admin_commande_confirm', methods: ['POST'])]
    public function confirm(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('confirm'.$commande->getId(), $request->request->get('_token'))) {
            $commande->setStatus('confirmé');
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_commande_index');
    }
}