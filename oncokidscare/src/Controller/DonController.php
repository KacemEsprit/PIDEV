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
use App\Message\SendDonationConfirmation;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
use App\Service\StripeService;

#[Route('/don')]
class DonController extends AbstractController
{
    #[Route('/create', name: 'app_don_create', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function create(Request $request, EntityManagerInterface $entityManager, StripeService $stripeService): Response
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
        $form = $this->createForm(DonType::class, $don);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Set default values
            $don->setDateDon(new \DateTime());
            $don->setStatut('en attente');
            
            // Sauvegarde du don avant la redirection
            $entityManager->persist($don);
            $entityManager->flush();

            // Pour les dons matériels, enregistrer directement sans passer par Stripe
            if (strtolower($don->getTypeDon()) === 'materiel') {
                $this->addFlash('success', 'Votre don matériel a été enregistré avec succès! Merci pour votre générosité.');
                return $this->redirectToRoute('app_donateur_dashboard');
            }

            // Pour les dons financiers, rediriger vers le paiement Stripe
            return $this->redirectToRoute('app_don_payment', ['donId' => $don->getId()]);
        }

        return $this->render('don/create.html.twig', [
            'form' => $form->createView(),
            'selected_company' => null
        ]);
    }


    #[Route('/{id}/confirm', name: 'app_don_confirm', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function confirmDonation(Don $don, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $don->setStatut('confirmé');
        $entityManager->flush();

        // Send confirmation email
        $email = (new TemplatedEmail())
            ->from('oncokidscare@example.com')
            ->to($don->getDonateur()->getEmail())
            ->subject('Confirmation de votre don - OncoKidsCare')
            ->htmlTemplate('emails/donation_confirmation.html.twig')
            ->context([
                'don' => $don
            ]);

        $mailer->send($email);

        $this->addFlash('success', 'Don confirmé et email de confirmation envoyé au donateur.');
        return $this->redirectToRoute('app_don_show', ['id' => $don->getId()]);
    }

    #[Route('/{id<\d+>}', name: 'app_don_show', methods: ['GET'])]
    public function show(EntityManagerInterface $entityManager, int $id): Response
    {
        $don = $entityManager->getRepository(Don::class)->find($id);
        
        if (!$don) {
            throw $this->createNotFoundException('Le don demandé n\'existe pas.');
        }
        
        return $this->render('don/show.html.twig', ['don' => $don]);
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
public function index(EntityManagerInterface $entityManager, Request $request): Response
{
    $user = $this->getUser();
    if (!$user instanceof User) {
        throw $this->createAccessDeniedException('Vous devez être connecté pour voir les dons.');
    }

    // Récupérer le terme de recherche depuis la requête
    $searchTerm = trim($request->query->get('search'));

    // Si l'utilisateur est un admin, il peut voir tous les dons
    if (in_array('ROLE_ADMIN', $user->getRoles())) {
        $qb = $entityManager->createQueryBuilder()
            ->select('d')
            ->from(Don::class, 'd')
            ->join('d.donateur', 'u');

        // Si un terme de recherche est fourni, filtrer les dons par nom et prénom du donateur
        if ($searchTerm) {
            $searchTerms = explode(' ', strtolower($searchTerm));
            if (count($searchTerms) > 1) {
                $qb->where(
                    $qb->expr()->orX(
                        $qb->expr()->andX(
                            $qb->expr()->like('LOWER(u.nom)', ':firstName'),
                            $qb->expr()->like('LOWER(u.prenom)', ':lastName')
                        ),
                        $qb->expr()->andX(
                            $qb->expr()->like('LOWER(u.nom)', ':lastName'),
                            $qb->expr()->like('LOWER(u.prenom)', ':firstName')
                        )
                    )
                )
                ->setParameter('firstName', '%' . $searchTerms[0] . '%')
                ->setParameter('lastName', '%' . $searchTerms[1] . '%');
            } else {
                $qb->where(
                    $qb->expr()->orX(
                        $qb->expr()->like('LOWER(u.nom)', ':term'),
                        $qb->expr()->like('LOWER(u.prenom)', ':term')
                    )
                )
                ->setParameter('term', '%' . strtolower($searchTerm) . '%');
            }
        }

        $dons = $qb->getQuery()->getResult();
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

    // Si c'est un donateur individuel
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
                    $newFilename = $safeFilename . '-' . uniqid() . '.' . $preuveFile->guessExtension();

                    $preuveFile->move(
                        $this->getParameter('preuves_directory'),
                        $newFilename
                    );
                    $don->setPreuveDon($newFilename);
                }

                $entityManager->persist($don);
                $entityManager->flush();

                $this->addFlash('success', 'Votre don a été enregistré avec succès! Merci pour votre générosité.');
                return $this->redirectToRoute('app_don_payment', ['donId' => $don->getId()]);
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de l\'enregistrement du don.');
            }
        }

        return $this->renderForm('don/new.html.twig', [
            'don' => $don,
            'form' => $form
        ]);
    }

    // Si aucune compagnie n'est sélectionnée
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
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $preuveFile->guessExtension();

                $preuveFile->move(
                    $this->getParameter('preuves_directory'),
                    $newFilename
                );
                $don->setPreuveDon($newFilename);
            }

            // Créer une campagne pour chaque compagnie associée au don
            foreach ($don->getCompagnies() as $compagnie) {
                $campagne = new Campagne();
                $campagne->setTitre("Campagne de don - " . $compagnie->getNom());
                $campagne->setDescription("Don " . ($don->getTypeDon() === 'financier' ? 'financier' : 'matériel'));
                $campagne->setDateDebut(new \DateTime());
                $campagne->setDateFin((new \DateTime())->modify('+1 year'));
                $campagne->setObjectif($don->getMontant() ?? 0.00);
                $campagne->setMontantCollecte(0.00);
                $campagne->setCompagnie($compagnie);
                $campagne->addDon($don);

                $entityManager->persist($campagne);
            }

            $entityManager->persist($don);
            $entityManager->flush();

            $this->addFlash('success', 'Votre don a été enregistré avec succès! Merci pour votre générosité.');
            return $this->redirectToRoute('app_don_payment', ['donId' => $don->getId()]);
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
    #[Route('/admin/dons', name: 'don_admin_index', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function adminIndex(EntityManagerInterface $entityManager, Request $request): Response
    {
        $search = trim($request->query->get('search', ''));
    
        $qb = $entityManager->createQueryBuilder()
            ->select('d')
            ->from(Don::class, 'd')
            ->join('d.donateur', 'u')
            ->orderBy('d.date_don', 'DESC');
    
        if (!empty($search)) {
            $search = preg_replace('/\s+/', ' ', strtolower($search)); // Normalize spaces
            $searchParts = explode(' ', $search, 2); // Split into first and last name
    
            if (count($searchParts) == 2) {
                // Search for exact match on first and last name (or vice versa)
                $qb->where(
                    $qb->expr()->orX(
                        $qb->expr()->andX(
                            $qb->expr()->like('LOWER(TRIM(u.nom))', ':nom'),
                            $qb->expr()->like('LOWER(TRIM(u.prenom))', ':prenom')
                        ),
                        $qb->expr()->andX(
                            $qb->expr()->like('LOWER(TRIM(u.prenom))', ':nom'),
                            $qb->expr()->like('LOWER(TRIM(u.nom))', ':prenom')
                        )
                    )
                )
                ->setParameter('nom', '%' . strtolower($searchParts[1]) . '%')
                ->setParameter('prenom', '%' . strtolower($searchParts[0]) . '%');
            } else {
                // Search for partial match on either first or last name
                $qb->where(
                    $qb->expr()->orX(
                        $qb->expr()->like('LOWER(TRIM(u.nom))', ':single'),
                        $qb->expr()->like('LOWER(TRIM(u.prenom))', ':single')
                    )
                )
                ->setParameter('single', '%' . strtolower($search) . '%');
            }
        }
    
        $dons = $qb->getQuery()->getResult();
    
        return $this->render('don/admin_index.html.twig', [
            'dons' => $dons,
            'search' => $search,
            'user' => $this->getUser(),
        ]);
    }

    #[Route('/{id}/confirm', name: 'app_don_confirm', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function confirmDon(Request $request, Don $don, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        if ($this->isCsrfTokenValid('confirm' . $don->getId(), $request->request->get('_token'))) {
            $don->setStatut('confirmé');
            $entityManager->flush();

            // Récupérer les informations du donateur
            $donateur = $don->getDonateur();
            $emailDonateur = $donateur->getEmail();
            
            // Construire l'email de confirmation
            $email = (new Email())
                ->from('amalmansri52@gmail.com') // Remplace par ton adresse
                ->to($emailDonateur)
                ->subject('Confirmation de votre don')
                ->html("
                    <p>Bonjour {$donateur->getNom()},</p>
                    <p>Votre don a été confirmé avec succès ! Merci pour votre générosité.</p>
                    <p>Détails du don :</p>
                    <ul>
                        <li>Montant : {$don->getMontant()} €</li>
                        <li>Date : {$don->getDateDon()->format('d/m/Y')}</li>
                    </ul>
                    <p>Merci de votre soutien !</p>
                ");

            // Envoyer l'e-mail
            $mailer->send($email);

            $this->addFlash('success', 'Le don a été confirmé avec succès et un e-mail a été envoyé au donateur.');
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

    #[Route('/statics', name: 'donation_statics')]
    public function donationStatics(EntityManagerInterface $entityManager): Response
    {
        $donations = $entityManager->getRepository(Don::class)->getDonationStatisticsByLocation();
    
        $labels = [];
        $data = [];
    
        foreach ($donations as $stat) {
            if ($stat['location']) {
                $labels[] = $stat['location'];
                $data[] = $stat['donationCount'];
            }
        }
    
        return $this->render('don/statistics.html.twig', [
            'labels' => json_encode($labels),
            'data' => json_encode($data),
            'user' => $this->getUser(), // Pass the user variable to the template
        ]);
    }
    

    #[Route('/payment/{donId}', name: 'app_don_payment')]
    #[IsGranted('ROLE_USER')]
    public function handleStripePayment(int $donId, EntityManagerInterface $entityManager, StripeService $stripeService): Response
    {
        $don = $entityManager->getRepository(Don::class)->find($donId);
        
        if (!$don || $don->getDonateur() !== $this->getUser()) {
            throw $this->createNotFoundException('Don not found or unauthorized access.');
        }

        try {
            $session = $stripeService->createCheckoutSession($don);
            return $this->redirect($session->url);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Une erreur est survenue lors de l\'initialisation du paiement.');
            return $this->redirectToRoute('app_don_create');
        }
    }

    #[Route('/webhook/stripe', name: 'stripe_webhook', methods: ['POST'])]
    public function stripeWebhook(Request $request, EntityManagerInterface $entityManager, StripeService $stripeService): Response
    {
        $event = $stripeService->handleWebhook($request);

        if ($event->type === 'checkout.session.completed') {
            $session = $event->data->object;
            $don = $entityManager->getRepository(Don::class)->find($session->metadata->don_id);

            if ($don) {
                $don->setStatut('confirmé');
                $don->setDateConfirmation(new \DateTime());
                $entityManager->flush();
            }
        }

        return new Response(null, 200);
    }}