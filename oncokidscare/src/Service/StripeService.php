<?php

namespace App\Service;

use Stripe\Stripe;
use Stripe\Checkout\Session;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Don;
use App\Entity\User;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class StripeService
{
    private $stripeSecretKey;
    private $entityManager;
    private $urlGenerator;

    public function __construct(string $stripeSecretKey, EntityManagerInterface $entityManager, UrlGeneratorInterface $urlGenerator)
    {
        $this->stripeSecretKey = $stripeSecretKey;
        $this->entityManager = $entityManager;
        $this->urlGenerator = $urlGenerator;
    }

    public function createCheckoutSession(Don $don, User $user): Session
    {
        $stripe = new \Stripe\StripeClient($_ENV['STRIPE_SECRET_KEY']);
    
        $session = $stripe->checkout->sessions->create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Donation',
                    ],
                    'unit_amount' => $don->getMontant() * 100, // Convertir en centimes
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->urlGenerator->generate('app_don_payment_success', [], UrlGeneratorInterface::ABSOLUTE_URL) . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => $this->urlGenerator->generate('app_don_payment_cancel', [], UrlGeneratorInterface::ABSOLUTE_URL),
        ]);
    
        return $session;
    }
        
}
