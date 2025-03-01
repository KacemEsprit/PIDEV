<?php

namespace App\Controller;
use Psr\Log\LoggerInterface;
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
use Dompdf\Dompdf;
use Dompdf\Options;

#[Route('/don')]
class DonController extends AbstractController
{
    #[Route('/create', name: 'app_don_create', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function create(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Redirection silencieuse pour les administrateurs
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('app_don_index');
        }

        $don = new Don();
        $user = $this->getUser();
        
        if (!$user instanceof User || !$user->isDonateur()) {
            $this->addFlash('error', 'Vous devez être connecté en tant que donateur pour faire un don.');
            return $this->redirectToRoute('app_home');
        }
        
        $don->setDonateur($user);
        
        // Vérifier si une compagnie a été sélectionnée et est validée
        $selectedCompany = null;
        $compagnieId = $request->query->get('compagnie');
        if ($compagnieId) {
            $selectedCompany = $entityManager->getRepository(Compagnie::class)->find($compagnieId);
            if ($selectedCompany && $selectedCompany->getDonateur() === $user) {
                // Vérifier si la compagnie est validée
                if ($selectedCompany->getStatutValidation() !== 'validee') {
                    $this->addFlash('error', 'Cette compagnie n\'est pas encore validée et ne peut pas faire de dons.');
                    return $this->redirectToRoute('app_compagnie_index');
                }
                $don->addCompagnie($selectedCompany);
            }
        }
        
        // Vérifier si l'utilisateur est un donateur individuel
        $isIndividualDonor = $user->getDonateurType() === 'individuel';
        
        $form = $this->createForm(DonType::class, $don, [
            'is_individual_donor' => $isIndividualDonor
        ]);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($don);
            $entityManager->flush();
            
            $this->addFlash('success', 'Votre don a été enregistré avec succès! Merci pour votre générosité.');
            return $this->redirectToRoute('app_donateur_dashboard');
        }
        
        return $this->render('don/create.html.twig', [
            'form' => $form->createView(),
            'selected_company' => $selectedCompany
        ]);
    }

    #[Route('/{id}/pdf', name: 'app_don_pdf', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function generatePdf(Don $don): Response
    {
        // Vérifier que l'utilisateur a le droit de télécharger ce reçu
        $user = $this->getUser();
        if (!$this->isGranted('ROLE_ADMIN') && $don->getDonateur() !== $user) {
            throw $this->createAccessDeniedException('Vous n\'avez pas le droit de télécharger ce reçu.');
        }

        // Rendre le HTML pour le PDF
        $html = $this->renderView('don/pdf.html.twig', [
            'don' => $don, // Passer l'entité Don spécifique
        ]);

        // Initialiser Dompdf
        $options = new Options();
        $options->set('defaultFont', 'Arial'); // Définir la police par défaut si nécessaire
        $dompdf = new Dompdf($options);

        // Charger le contenu HTML
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Retourner le PDF généré en tant que réponse
        return new Response(
            $dompdf->output(),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="don_' . $don->getId() . '.pdf"',
            ]
        );
    }

    #[Route('/', name: 'app_don_index', methods: ['GET'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour voir les dons.');
        }
    
        // Si l'utilisateur est un admin, il peut voir tous les dons
        if (in_array('ROLE_ADMIN', $user->getRoles())) {
            $dons = $entityManager->getRepository(Don::class)->findAll();
        } else {
            // Sinon, l'utilisateur ne voit que ses propres dons
            $dons = $entityManager->getRepository(Don::class)->findBy(['donateur' => $user]);
        }
    
        return $this->render('don/index.html.twig', [
            'dons' => $dons,
            'is_admin' => in_array('ROLE_ADMIN', $user->getRoles())
        ]);
    }

    #[Route('/new', name: 'app_don_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        // Redirection silencieuse pour les administrateurs
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('app_don_index');
        }

        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour faire un don.');
            return $this->redirectToRoute('app_login');
        }

        // Si c'est un donateur individuel, on utilise un chemin simplifié
        if ($user->getDonateurType() === 'individuel') {
            $don = new Don();
            $don->setDonateur($user);
            $don->setStatut('En attente');
            $don->setDateDon(new \DateTime());
            
            $form = $this->createForm(DonType::class, $don, [
                'is_individual_donor' => true
            ]);
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
                'form' => $form
            ]);
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

        // Vérifier si la compagnie est validée
        if ($compagnie->getStatutValidation() !== 'validee') {
            $this->addFlash('error', 'Cette compagnie n\'est pas encore validée et ne peut pas faire de dons.');
            return $this->redirectToRoute('app_compagnie_index');
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
    #[IsGranted('ROLE_USER')]
    public function show(Don $don): Response
    {
        // Vérifier que l'utilisateur a le droit de voir ce don
        if (!$this->isGranted('ROLE_ADMIN') && $don->getDonateur() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous n\'avez pas le droit de voir ce don.');
        }

        return $this->render('don/show.html.twig', [
            'don' => $don,
        ]);
    }

  

    #[Route('/{id}', name: 'app_don_delete', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function delete(Request $request, Don $don, EntityManagerInterface $entityManager): Response
    {
        // Redirection silencieuse pour les administrateurs
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('app_don_index');
        }

        if ($this->isCsrfTokenValid('delete'.$don->getId(), $request->request->get('_token'))) {
            $entityManager->remove($don);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_don_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/admin/dons', name: 'don_admin_index', methods: ['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function adminIndex(EntityManagerInterface $entityManager, Request $request): Response
    {
        $dons = $entityManager->getRepository(Don::class)->findBy([], ['date_don' => 'DESC']);
    
        // Récupérer la valeur de la recherche depuis la requête
        $search = $request->query->get('search', ''); // Si 'search' n'est pas présent, retourne une chaine vide.
    
        return $this->render('don/admin_index.html.twig', [
            'dons' => $dons,
            'search' => $search,
        ]);
    }

    #[Route('{id}/confirm', name: 'app_don_confirm', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function confirmDon(Request $request, Don $don, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('confirm'.$don->getId(), $request->request->get('_token'))) {
            $don->setStatut('confirmé');
            $entityManager->flush();
            
            $this->addFlash('success', 'Le don a été confirmé avec succès.');
        }

        return $this->redirectToRoute('don_admin_index');
    }

    #[Route('/admin/dons/{id}/reject', name: 'app_don_reject', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function rejectDon(Request $request, Don $don, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('reject'.$don->getId(), $request->request->get('_token'))) {
            $don->setStatut('rejeté');
            $entityManager->flush();
            
            $this->addFlash('success', 'Le don a été rejeté.');
        }

        return $this->redirectToRoute('don_admin_index');
    }
#[Route('/statistics', name: 'donations_statistics', methods: ['GET'])]
    public function donationStatistics(DonRepository $donRepository): JsonResponse
    {
        $stats = $donRepository->getDonationStatsByDate();
        return $this->json($stats);
    }
}
