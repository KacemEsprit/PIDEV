<?php

namespace App\Controller;

use App\Entity\Don;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class StripeController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private string $stripeSecretKey;

    public function __construct(EntityManagerInterface $entityManager, string $stripeSecretKey)
    {
        $this->entityManager = $entityManager;
        $this->stripeSecretKey = $stripeSecretKey;
    }

    #[Route('/stripe/create-session/{id}', name: 'stripe_create_session')]
    public function createSession(Don $don): Response
    {
        Stripe::setApiKey($this->stripeSecretKey);

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Don financier',
                    ],
                    'unit_amount' => $don->getMontant() * 100, // Convert to cents
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('stripe_success', ['id' => $don->getId()], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('stripe_cancel', ['id' => $don->getId()], UrlGeneratorInterface::ABSOLUTE_URL),
        ]);

        return new RedirectResponse($session->url);
    }

    #[Route('/stripe/success/{id}', name: 'stripe_success')]
    public function success(Don $don): Response
    {
        $don->setStatut('completed');
        $this->entityManager->flush();

        $this->addFlash('success', 'Votre paiement a été effectué avec succès!');
        return $this->redirectToRoute('don_index');
    }

    #[Route('/stripe/cancel/{id}', name: 'stripe_cancel')]
    public function cancel(Don $don): Response
    {
        $this->addFlash('error', 'Le paiement a été annulé.');
        return $this->redirectToRoute('don_index');
    }
}