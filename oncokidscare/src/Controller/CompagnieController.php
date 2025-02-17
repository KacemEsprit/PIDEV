<?php

namespace App\Controller;

use App\Entity\Compagnie;
use App\Form\CompagnieType;
use App\Repository\CompagnieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/compagnie')]
#[IsGranted('ROLE_USER')]
class CompagnieController extends AbstractController
{
    #[Route('/', name: 'app_compagnie_index', methods: ['GET'])]
    public function index(CompagnieRepository $compagnieRepository): Response
    {
        return $this->render('compagnie/index.html.twig', [
            'compagnies' => $compagnieRepository->findAll(),
        ]); 
    }

    #[Route('/select-or-create', name: 'app_compagnie_select_or_create', methods: ['GET'])]
    public function selectOrCreate(CompagnieRepository $compagnieRepository): Response
    {
        $user = $this->getUser();
        $compagnies = $compagnieRepository->findBy(['donateur' => $user]);

        return $this->render('compagnie/select_or_create.html.twig', [
            'compagnies' => $compagnies,
        ]);
    }

    #[Route('/new', name: 'app_compagnie_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $compagnie = new Compagnie();
        $compagnie->setDonateur($this->getUser());
        
        $form = $this->createForm(CompagnieType::class, $compagnie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Vérifier si une compagnie similaire existe déjà
                $existingCompagnie = $entityManager->getRepository(Compagnie::class)->findExistingCompagnie(
                    $compagnie->getNom(),
                    $compagnie->getSiret(),
                    $this->getUser()->getId()
                );

                if ($existingCompagnie) {
                    if ($existingCompagnie->getSiret() === $compagnie->getSiret()) {
                        $this->addFlash('error', 'Une compagnie avec ce numéro SIRET existe déjà.');
                    } else {
                        $this->addFlash('error', 'Une compagnie avec ce nom existe déjà.');
                    }
                    return $this->renderForm('compagnie/new.html.twig', [
                        'compagnie' => $compagnie,
                        'form' => $form,
                    ]);
                }

                // Vérifier si le nom ou le SIRET sont uniques globalement
                if (!$entityManager->getRepository(Compagnie::class)->isCompagnieUnique(
                    $compagnie->getNom(),
                    $compagnie->getSiret()
                )) {
                    $this->addFlash('error', 'Une compagnie avec ce nom ou ce numéro SIRET existe déjà dans notre système.');
                    return $this->renderForm('compagnie/new.html.twig', [
                        'compagnie' => $compagnie,
                        'form' => $form,
                    ]);
                }

                $logoFile = $form->get('logo')->getData();
                if ($logoFile) {
                    $originalFilename = pathinfo($logoFile->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$logoFile->guessExtension();

                    try {
                        $logoFile->move(
                            $this->getParameter('logos_directory'),
                            $newFilename
                        );
                        $compagnie->setLogo($newFilename);
                    } catch (FileException $e) {
                        $this->addFlash('error', 'Une erreur est survenue lors du téléchargement du logo.');
                    }
                }

                $entityManager->persist($compagnie);
                $entityManager->flush();

                $this->addFlash('success', 'La compagnie a été créée avec succès.');
                
                // Check if there's a post-company creation redirect stored in session
                $session = $request->getSession();
                $redirectRoute = $session->get('post_company_redirect');
                if ($redirectRoute) {
                    $session->remove('post_company_redirect');
                    return $this->redirectToRoute($redirectRoute);
                }
                
                return $this->redirectToRoute('app_compagnie_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de la création de la compagnie.');
            }
        }

        return $this->renderForm('compagnie/new.html.twig', [
            'compagnie' => $compagnie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_compagnie_show', methods: ['GET'])]
    public function show(Compagnie $compagnie): Response
    {
        return $this->render('compagnie/show.html.twig', [
            'compagnie' => $compagnie,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_compagnie_edit', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function edit(Request $request, Compagnie $compagnie, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CompagnieType::class, $compagnie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_compagnie_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('compagnie/edit.html.twig', [
            'compagnie' => $compagnie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_compagnie_delete', methods: ['POST'])]
    public function delete(Request $request, Compagnie $compagnie, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$compagnie->getId(), $request->request->get('_token'))) {
            $entityManager->remove($compagnie);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_compagnie_index', [], Response::HTTP_SEE_OTHER);
    }
}
