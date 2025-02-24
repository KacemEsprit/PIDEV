<?php

namespace App\Security;

use App\Entity\User;
use App\Repository\CompagnieRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    private UrlGeneratorInterface $urlGenerator;
    private CompagnieRepository $compagnieRepository;

    public function __construct(
        UrlGeneratorInterface $urlGenerator,
        CompagnieRepository $compagnieRepository
    ) {
        $this->urlGenerator = $urlGenerator;
        $this->compagnieRepository = $compagnieRepository;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token): RedirectResponse
    {
        /** @var User $user */
        $user = $token->getUser();

        // Redirection basée sur le rôle et le type de donateur
        return match ($user->getRole()) {
            User::ROLE_ADMIN => new RedirectResponse($this->urlGenerator->generate('app_admin_index')),
            User::ROLE_MEDECIN => new RedirectResponse($this->urlGenerator->generate('app_medecin_dashboard')),
            User::ROLE_PATIENT => new RedirectResponse($this->urlGenerator->generate('app_patient_dashboard')),
            User::ROLE_DONATEUR => $this->handleDonateurRedirect($user),
            default => new RedirectResponse($this->urlGenerator->generate('app_home')),
        };
    }

    private function handleDonateurRedirect(User $user): RedirectResponse
    {
        // Si c'est un donateur individuel, redirection directe vers la page de don
        if ($user->getDonateurType() === 'individuel') {
            return new RedirectResponse($this->urlGenerator->generate('app_don_create'));
        }
        
        // Si c'est une compagnie, redirection vers la page de sélection/création de compagnie
        if ($user->getDonateurType() === 'compagnie') {
            return new RedirectResponse($this->urlGenerator->generate('app_compagnie_select_or_create'));
        }
        
        // Par défaut, redirection vers le tableau de bord donateur
        return new RedirectResponse($this->urlGenerator->generate('app_donateur_dashboard'));
    }
}