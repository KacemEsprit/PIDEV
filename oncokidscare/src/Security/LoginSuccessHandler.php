<?php

namespace App\Security;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    private UrlGeneratorInterface $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token): RedirectResponse
    {
        /** @var User $user */
        $user = $token->getUser();

        $targetUrl = match ($user->getRole()) {
            User::ROLE_ADMIN => $this->urlGenerator->generate('app_admin_index'),
            User::ROLE_MEDECIN => $this->urlGenerator->generate('app_medecin_dashboard'),
            User::ROLE_PATIENT => $this->urlGenerator->generate('app_patient_dashboard'),
            User::ROLE_DONATEUR => $this->urlGenerator->generate('app_donateur_dashboard'),
            default => $this->urlGenerator->generate('app_home'),
        };

        return new RedirectResponse($targetUrl);
    }
}
