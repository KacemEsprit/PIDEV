<?php

namespace App\Controller\Admin;

use App\Entity\Compagnie;
use App\Form\CompagnieType;
use App\Repository\CompagnieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/compagnie')]
class CompagnieController extends AbstractController
{
    #[Route('/', name: 'admin_compagnie_index', methods: ['GET'])]
    public function index(CompagnieRepository $compagnieRepository): Response
    {
        return $this->render('admin/compagnie/index.html.twig', [
            'compagnies' => $compagnieRepository->findAll(),
        ]);
    }

    #[Route('/{id}/modifier', name: 'admin_compagnie_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Compagnie $compagnie, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CompagnieType::class, $compagnie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'La compagnie a été modifiée avec succès.');
            return $this->redirectToRoute('admin_compagnie_index');
        }

        return $this->render('admin/compagnie/edit.html.twig', [
            'compagnie' => $compagnie,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/valider', name: 'admin_compagnie_validate', methods: ['POST'])]
    public function validate(Compagnie $compagnie, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('Seuls les administrateurs peuvent valider les compagnies.');
        }
        
        $compagnie->setStatutValidation('validee');
        $entityManager->flush();
        
        $this->addFlash('success', 'La compagnie a été validée avec succès.');
        return $this->redirectToRoute('admin_compagnie_index');
    }

    #[Route('/{id}/rejeter', name: 'admin_compagnie_reject', methods: ['POST'])]
    public function reject(Request $request, Compagnie $compagnie, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('Seuls les administrateurs peuvent rejeter les compagnies.');
        }
        
        $motif = $request->request->get('motif_rejet');
        $compagnie->setStatutValidation('rejetee');
        $compagnie->setMotifRejet($motif);
        $entityManager->flush();
        
        $this->addFlash('success', 'La compagnie a été rejetée.');
        return $this->redirectToRoute('admin_compagnie_index');
    }

    #[Route('/{id}/supprimer', name: 'admin_compagnie_delete', methods: ['POST'])]
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
