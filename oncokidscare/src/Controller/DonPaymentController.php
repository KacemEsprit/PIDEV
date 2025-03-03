<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Don;
use App\Entity\User;
use App\Service\StripeService;
use App\Repository\DonRepository;

#[Route('/payment')]
#[IsGranted('ROLE_USER')]
class DonPaymentController extends AbstractController
{
    #[Route('/new/{donId}', name: 'app_don_payment', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        StripeService $stripeService,
        int $donId
    ): Response {
        $don = $entityManager->getRepository(Don::class)->find($donId);
        if (!$don) {
            throw $this->createNotFoundException('Don introuvable.');
        }

        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour faire un don.');
        }

        // Créer une session de paiement Stripe
        $session = $stripeService->createCheckoutSession($don, $user);

        // Associer l'ID de session Stripe au don
        $don->setStripeSessionId($session->id);
        $entityManager->flush();

        return $this->redirect($session->url);
    }

    #[Route('/success', name: 'app_don_payment_success')]
    public function paymentSuccess(Request $request, EntityManagerInterface $entityManager, DonRepository $donRepository): Response
    {
        $sessionId = $request->query->get('session_id');
        if (!$sessionId) {
            throw $this->createNotFoundException('Session Stripe introuvable. Veuillez vérifier l\'URL de redirection.', null);
        }

        $don = $donRepository->findOneBy(['stripeSessionId' => $sessionId]);
        if (!$don) {
            throw $this->createNotFoundException(
                sprintf('Don non trouvé pour la session Stripe %s. Veuillez contacter le support.', $sessionId),
                null
            );
        }

        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à ce don.');
        }

        $don->setStatut('payé');
        $entityManager->flush();

        return $this->render('don/payment_success.html.twig', [
            'don' => $don,
        ]);
    }

    #[Route('/cancel', name: 'app_don_payment_cancel')]
    public function paymentCancel(): Response
    {
        return $this->render('don/payment_cancel.html.twig');
    }
}