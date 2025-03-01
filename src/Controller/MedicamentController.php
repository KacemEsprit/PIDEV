<?php

namespace App\Controller;

use App\Entity\Medicament;
use App\Form\MedicamentType;
use App\Entity\LigneCommande;
use App\Repository\MedicamentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/medicament')]
#[IsGranted('ROLE_ADMIN')]
class MedicamentController extends AbstractController
{
    #[Route('/', name: 'app_medicament_index', methods: ['GET'])]
    public function index(MedicamentRepository $medicamentRepository): Response
    {
        return $this->render('medicament/index.html.twig', [
            'medicaments' => $medicamentRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_medicament_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $medicament = new Medicament();
        $form = $this->createForm(MedicamentType::class, $medicament);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($medicament);
            $entityManager->flush();

            $this->addFlash('success', 'Le médicament a été ajouté avec succès.');
            return $this->redirectToRoute('app_medicament_index');
        }

        return $this->render('medicament/new.html.twig', [
            'medicament' => $medicament,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_medicament_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Medicament $medicament, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MedicamentType::class, $medicament);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            
            $this->addFlash('success', 'Le médicament a été modifié avec succès.');
            return $this->redirectToRoute('app_medicament_index');
        }

        return $this->render('medicament/edit.html.twig', [
            'medicament' => $medicament,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_medicament_delete', methods: ['POST'])]
public function delete(Request $request, Medicament $medicament, EntityManagerInterface $entityManager): Response
{
    $ligneCommandes = $entityManager->getRepository(LigneCommande::class)->findBy(['medicament' => $medicament]);

    if (count($ligneCommandes) > 0) {
        $this->addFlash('success', 'Ce médicament est déjà utilisé dans une commande et ne peut pas être supprimé.');
        return $this->redirectToRoute('app_medicament_index');
    }

    if ($this->isCsrfTokenValid('delete'.$medicament->getId(), $request->request->get('_token'))) {
        $entityManager->remove($medicament);
        $entityManager->flush();
        $this->addFlash('success', 'Le médicament a été supprimé avec succès.');
    }

    return $this->redirectToRoute('app_medicament_index');
}
}