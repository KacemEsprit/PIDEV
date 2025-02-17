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
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/compagnie')]
#[IsGranted('ROLE_USER')]
class CompagnieController extends AbstractController
{
    #[Route('/', name: 'app_compagnie_index', methods: ['GET'])]
    public function index(CompagnieRepository $compagnieRepository): Response
    {
        // Si c'est un admin, montrer toutes les compagnies
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->render('compagnie/index.html.twig', [
                'compagnies' => $compagnieRepository->findAll(),
            ]);
        }
        
        // Sinon, montrer uniquement les compagnies du donateur
        return $this->render('compagnie/index.html.twig', [
            'compagnies' => $compagnieRepository->findBy(['donateur' => $this->getUser()]),
        ]);
    }

    #[Route('/select-or-create', name: 'app_compagnie_select_or_create', methods: ['GET'])]
    public function selectOrCreate(CompagnieRepository $compagnieRepository): Response
    {
        $user = $this->getUser();
        // Ne montrer que les compagnies validées pour la sélection
        $compagnies = $compagnieRepository->findBy([
            'donateur' => $user,
            'statut_validation' => 'validee'
        ]);

        return $this->render('compagnie/select_or_create.html.twig', [
            'compagnies' => $compagnies,
        ]);
    }

    #[Route('/new', name: 'app_compagnie_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        // Empêcher l'admin de créer une compagnie
        if ($this->isGranted('ROLE_ADMIN')) {
            $this->addFlash('error', 'Les administrateurs ne peuvent pas créer de compagnies.');
            return $this->redirectToRoute('app_compagnie_index');
        }

        $compagnie = new Compagnie();
        $compagnie->setDonateur($this->getUser());
        $compagnie->setStatutValidation('en_attente');
        
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

                $this->addFlash('success', 'La compagnie a été créée et est en attente de validation par l\'administrateur.');
                
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

    #[Route('/validate/{id}/{action}', name: 'app_compagnie_validate', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function validateCompagnie(
        Request $request,
        Compagnie $compagnie,
        string $action,
        EntityManagerInterface $entityManager
    ): Response {
        if ($action === 'approve') {
            $compagnie->setStatutValidation('validee');
            $this->addFlash('success', 'La compagnie a été approuvée.');
        } elseif ($action === 'reject') {
            $compagnie->setStatutValidation('rejetee');
            
            // Si un motif de rejet est fourni
            $motifRejet = $request->request->get('motif_rejet');
            if ($motifRejet) {
                $compagnie->setMotifRejet($motifRejet);
            }
            
            $this->addFlash('success', 'La compagnie a été rejetée.');
        }

        $entityManager->flush();
        return $this->redirectToRoute('app_compagnie_index');
    }

    #[Route('/pending', name: 'app_compagnie_pending', methods: ['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function pendingCompagnies(CompagnieRepository $compagnieRepository): Response
    {
        return $this->render('compagnie/pending.html.twig', [
            'compagnies' => $compagnieRepository->findBy(['statut_validation' => 'en_attente']),
        ]);
    }
}
