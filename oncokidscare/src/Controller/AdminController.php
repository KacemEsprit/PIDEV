<?php

namespace App\Controller;

use App\Entity\Compagnie;
use App\Form\CompagnieType;
use App\Repository\CompagnieRepository;
use App\Entity\User;
use App\Entity\Publication;
use App\Repository\UserRepository;
use App\Repository\PublicationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Entity\Commande;
use App\Repository\CommandeRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ProfileFormType;



#[Route('/admin')]
#[IsGranted('ROLE_ADMIN')]
class AdminController extends AbstractController
{
    #[Route('/admin_dashboard', name: 'app_admin_index')]
    public function index(UserRepository $userRepository): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();

        $admins = $userRepository->findBy(['role' => User::ROLE_ADMIN]);
        $medecins = $userRepository->findBy(['role' => User::ROLE_MEDECIN]);
        $patients = $userRepository->findBy(['role' => User::ROLE_PATIENT]);
        $donateurs = $userRepository->findBy(['role' => User::ROLE_DONATEUR]);

        return $this->render('admin_home/index.html.twig', [
            'user' => $currentUser,
            'admins' => $admins,
            'medecins' => $medecins,
            'patients' => $patients,
            'donateurs' => $donateurs,
        ]);
    }
    #[Route('/users', name: 'app_admin_users')]
    public function indexx(UserRepository $userRepository): Response
    {
        $allUsers = $userRepository->findAll();
        $currentUser = $this->getUser();

        return $this->render('admin_home/CrudUsers/Manage_users.html.twig', [
            'allUsers' => $allUsers,
            'user' => $currentUser,
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/profile', name: 'app_admin_profile', methods: ['GET', 'POST'])]
    public function myprofile(Request $request, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        $currentUser = $this->getUser();
        $form = $this->createForm(ProfileFormType::class, $currentUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadDir = $this->getParameter('kernel.project_dir') . '/public/uploads/user_pictures';
            
            
            $pictureFile = $form->get('picture')->getData();
            if ($pictureFile) {
                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                
                $newFilename = uniqid() . '.' . $pictureFile->guessExtension();
                
                try {
                    $pictureFile->move($uploadDir, $newFilename);
                    
                    $oldPicture = $currentUser->getPicture();
                    if ($oldPicture) {
                        $oldPicturePath = $uploadDir . '/' . $oldPicture;
                        if (file_exists($oldPicturePath)) {
                            unlink($oldPicturePath);
                        }
                    }
                    
                    $currentUser->setPicture($newFilename);
                    
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Error uploading picture: ' . $e->getMessage());
                    return $this->redirectToRoute('app_admin_profile');
                }
            }
            
            $password = $form->get('password')->getData();
            if ($password) {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $currentUser->setPassword($hashedPassword);
            }

            try {
                $entityManager->flush();
                $this->addFlash('success', 'Profile updated successfully');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Error saving profile: ' . $e->getMessage());
            }
            
            return $this->redirectToRoute('app_admin_profile');
        }

        return $this->render('admin_home/myprofile.html.twig', [
            'user' => $currentUser,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/dashboard', name: 'app_dashboard')]
    public function dashboard(): Response
    {
        $currentUser = $this->getUser();

        return $this->render('admin_home/index.html.twig', [
            'user' => $currentUser,
            'controller_name' => 'AdminHomeController',
        ]);
    }










    #[Route('/publications', name: 'admin_publications')]
    public function managePublications(PublicationRepository $publicationRepository): Response
    {
        $publications = $publicationRepository->findAll();

        return $this->render('admin_home/publications.html.twig', [
            'publications' => $publications,
        ]);
    }

    #[Route('/publications/approve/{id}', name: 'admin_publication_approve', methods: ['POST'])]
    public function approvePublication(Publication $publication, EntityManagerInterface $entityManager): Response
    {
        $publication->setStatus('approved');
        $entityManager->flush();

        $this->addFlash('success', 'Publication approuvée avec succès.');

        return $this->redirectToRoute('admin_publications');
    }

    #[Route('/publications/reject/{id}', name: 'admin_publication_reject', methods: ['POST'])]
    public function rejectPublication(Publication $publication, EntityManagerInterface $entityManager): Response
    {
        $publication->setStatus('rejected');
        $entityManager->flush();

        $this->addFlash('warning', 'Publication rejetée.');

        return $this->redirectToRoute('admin_publications');
    }
    
     /*  #[Route('/dashboard', name: 'app_dashboard')]
    public function dashboard(): Response
    {
        return $this->render('admin_home/index.html.twig', [
            'controller_name' => 'AdminHomeController',
        ]);
    } */

    #[Route('/commandes', name: 'admin_commandes')]
    public function manageCommandes(CommandeRepository $commandeRepository): Response
    {
        $commandes = $commandeRepository->findAll();

        return $this->render('admin_home/commandes.html.twig', [
            'commandes' => $commandes,
        ]);
    }

    #[Route('/commandes/valider/{id}', name: 'admin_commande_valider', methods: ['POST'])]
    public function validerCommande(Commande $commande, EntityManagerInterface $entityManager): Response
    {
        $commande->setStatus('Validée');
        $entityManager->flush();

        $this->addFlash('success', 'La commande a été validée avec succès.');
        return $this->redirectToRoute('admin_commandes');
    }

    #[Route('/commandes/annuler/{id}', name: 'admin_commande_annuler', methods: ['POST'])]
    public function annulerCommande(Commande $commande, EntityManagerInterface $entityManager): Response
    {
        $commande->setStatus('Annulée');
        $entityManager->flush();

        $this->addFlash('success', 'La commande a été annulée.');
        return $this->redirectToRoute('admin_commandes');
    }
    
    #[Route('/compagnie', name: 'admin_compagnie_index', methods: ['GET'])]
    public function compagnieIndex(CompagnieRepository $compagnieRepository): Response
    {
        return $this->render('admin_home/compagnie/index.html.twig', [
            'compagnies' => $compagnieRepository->findAll(),
        ]);
    }

    #[Route('/compagnie/{id}/modifier', name: 'admin_compagnie_edit', methods: ['GET', 'POST'])]
    public function compagnieEdit(Request $request, Compagnie $compagnie, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CompagnieType::class, $compagnie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'La compagnie a été modifiée avec succès.');
            return $this->redirectToRoute('admin_compagnie_index');
        }

        return $this->render('admin_home/compagnie/edit.html.twig', [
            'compagnie' => $compagnie,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/compagnie/{id}/valider', name: 'admin_compagnie_validate', methods: ['POST'])]
    public function compagnieValidate(Compagnie $compagnie, EntityManagerInterface $entityManager): Response
    {
        $compagnie->setStatutValidation('validee');
        $entityManager->flush();
        
        $this->addFlash('success', 'La compagnie a été validée avec succès.');
        return $this->redirectToRoute('admin_compagnie_index');
    }

    #[Route('/compagnie/{id}/rejeter', name: 'admin_compagnie_reject', methods: ['POST'])]
    public function compagnieReject(Compagnie $compagnie, EntityManagerInterface $entityManager): Response
    {
        $compagnie->setStatutValidation('rejetee');
        $entityManager->flush();
        
        $this->addFlash('success', 'La compagnie a été rejetée.');
        return $this->redirectToRoute('admin_compagnie_index');
    }

    #[Route('/compagnie/en-attente', name: 'admin_compagnie_pending', methods: ['GET'])]
    public function compagniePending(CompagnieRepository $compagnieRepository): Response
    {
        return $this->render('admin_home/compagnie/pending.html.twig', [
            'compagnies' => $compagnieRepository->findBy(['statutValidation' => 'pending']),
        ]);
    }
  #[Route('/compagnie/{id}/supprimer', name: 'admin_compagnie_delete', methods: ['POST'])]
public function delete(Request $request, Compagnie $compagnie, EntityManagerInterface $entityManager): Response
{
    if (!$this->isGranted('ROLE_ADMIN')) {
        throw $this->createAccessDeniedException('Seuls les administrateurs peuvent supprimer les compagnies.');
    }

    $token = $request->request->get('_token');
    if ($this->isCsrfTokenValid('delete'.$compagnie->getId(), $token)) {
        $entityManager->remove($compagnie);
        $entityManager->flush();
        $this->addFlash('success', 'La compagnie a été supprimée avec succès.');
    }

    return $this->redirectToRoute('admin_compagnie_index');
}

}