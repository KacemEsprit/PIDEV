<?php

namespace App\Controller;

use App\Entity\Don;
use App\Entity\Compagnie;
use App\Entity\User;
use App\Entity\Campagne;
use App\Form\DonType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/donateur/dashboard/don')]
#[IsGranted('ROLE_USER')]
class DonController extends AbstractController
{
    #[Route('/create', name: 'app_don_create', methods: ['GET', 'POST'])]
    public function create(Request $request, EntityManagerInterface $entityManager): Response
    {
        $don = new Don();
        $user = $this->getUser();
        
        if (!$user instanceof User || !$user->isDonateur()) {
            $this->addFlash('error', 'Vous devez être connecté en tant que donateur pour faire un don.');
            return $this->redirectToRoute('app_home');
        }
        
        $don->setDonateur($user);
        
        $form = $this->createForm(DonType::class, $don);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($don);
            $entityManager->flush();
            
            $this->addFlash('success', 'Votre don a été enregistré avec succès! Merci pour votre générosité.');
            return $this->redirectToRoute('app_donateur_dashboard');
        }
        
        return $this->render('don/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/', name: 'app_don_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $dons = $entityManager
            ->getRepository(Don::class)
            ->findAll();

        return $this->render('don/index.html.twig', [
            'dons' => $dons,
        ]);
    }

    #[Route('/new', name: 'app_don_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour faire un don.');
            return $this->redirectToRoute('app_login');
        }

        // Si aucune compagnie n'est sélectionnée, rediriger vers la page de sélection
        $compagnieId = $request->query->get('compagnie');
        if (!$compagnieId) {
            return $this->redirectToRoute('app_compagnie_select_or_create');
        }

        $compagnie = $entityManager->getRepository(Compagnie::class)->find($compagnieId);
        if (!$compagnie || $compagnie->getDonateur() !== $user) {
            $this->addFlash('error', 'Compagnie invalide.');
            return $this->redirectToRoute('app_compagnie_select_or_create');
        }

        $don = new Don();
        $don->setDonateur($user);
        $don->setStatut('En attente');
        $don->setDateDon(new \DateTime());
        $don->addCompagnie($compagnie);
        
        $form = $this->createForm(DonType::class, $don);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $preuveFile = $form->get('preuve_don')->getData();
                if ($preuveFile) {
                    $originalFilename = pathinfo($preuveFile->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$preuveFile->guessExtension();

                    $preuveFile->move(
                        $this->getParameter('preuves_directory'),
                        $newFilename
                    );
                    $don->setPreuveDon($newFilename);
                }

                // Créer une nouvelle campagne pour chaque compagnie associée au don
                foreach ($don->getCompagnies() as $compagnie) {
                    $campagne = new Campagne();
                    $campagne->setTitre("Campagne de don - " . $compagnie->getNom());
                    $campagne->setDescription("Don " . ($don->getTypeDon() === 'financier' ? 'financier' : 'matériel'));
                    $campagne->setDateDebut(new \DateTime());
                    $campagne->setDateFin((new \DateTime())->modify('+1 year'));
                    $campagne->setObjectif($don->getMontant() ?? '0.00');
                    $campagne->setMontantCollecte('0.00');
                    $campagne->setCompagnie($compagnie);
                    $campagne->addDon($don);
                    
                    $entityManager->persist($campagne);
                }

                $entityManager->persist($don);
                $entityManager->flush();

                $this->addFlash('success', 'Votre don a été enregistré avec succès! Merci pour votre générosité.');
                return $this->redirectToRoute('app_donateur_dashboard');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de l\'enregistrement du don.');
            }
        }

        return $this->renderForm('don/new.html.twig', [
            'don' => $don,
            'form' => $form,
            'compagnie' => $compagnie
        ]);
    }

    #[Route('/{id}', name: 'app_don_show', methods: ['GET'])]
    public function show(Don $don): Response
    {
        return $this->render('don/show.html.twig', [
            'don' => $don,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_don_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Don $don, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(DonType::class, $don);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($don->getCompagnies()->isEmpty()) {
                $this->addFlash('error', 'Veuillez sélectionner au moins une compagnie.');
                return $this->renderForm('don/edit.html.twig', [
                    'don' => $don,
                    'form' => $form,
                ]);
            }

            $preuveFile = $form->get('preuve_don')->getData();
            if ($preuveFile) {
                $originalFilename = pathinfo($preuveFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$preuveFile->guessExtension();

                try {
                    $preuveFile->move(
                        $this->getParameter('preuves_directory'),
                        $newFilename
                    );
                    $don->setPreuveDon($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Une erreur est survenue lors du téléchargement du fichier.');
                }
            }

            $entityManager->flush();
            $this->addFlash('success', 'Le don a été modifié avec succès.');
            return $this->redirectToRoute('app_don_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('don/edit.html.twig', [
            'don' => $don,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_don_delete', methods: ['POST'])]
    public function delete(Request $request, Don $don, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$don->getId(), $request->request->get('_token'))) {
            $entityManager->remove($don);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_don_index', [], Response::HTTP_SEE_OTHER);
    }
}