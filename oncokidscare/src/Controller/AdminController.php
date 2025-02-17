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

        return $this->render('admin_home/index.html.twig', [
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
    
      #[Route('/dashboard', name: 'app_dashboard')]
    public function dashboard(): Response
    {
        return $this->render('admin_home/index.html.twig', [
            'controller_name' => 'AdminHomeController',
        ]);
    }

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