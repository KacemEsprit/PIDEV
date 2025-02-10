<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Publication;
use App\Repository\UserRepository;
use App\Repository\PublicationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin')]
#[IsGranted('ROLE_ADMIN')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'app_admin_index')]
    public function index(UserRepository $userRepository): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();

        $admins = $userRepository->findBy(['role' => User::ROLE_ADMIN]);
        $medecins = $userRepository->findBy(['role' => User::ROLE_MEDECIN]);
        $patients = $userRepository->findBy(['role' => User::ROLE_PATIENT]);
        $donateurs = $userRepository->findBy(['role' => User::ROLE_DONATEUR]);

        return $this->render('admin/index.html.twig', [
            'user' => $currentUser,
            'admins' => $admins,
            'medecins' => $medecins,
            'patients' => $patients,
            'donateurs' => $donateurs,
        ]);
    }

    #[Route('/publications', name: 'admin_publications')]
    public function managePublications(PublicationRepository $publicationRepository): Response
    {
        $publications = $publicationRepository->findAll();

        return $this->render('admin/publications.html.twig', [
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
}
