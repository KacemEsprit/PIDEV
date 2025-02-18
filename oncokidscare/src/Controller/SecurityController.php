<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils, SessionInterface $session): Response
    {
        // Redirect if already logged in
        if ($this->getUser()) {
            /** @var User $user */
            $user = $this->getUser();
            
            // Special handling for company donors
            if ($user->getRole() === User::ROLE_DONATEUR && $user->getDonateurType() === 'compagnie') {
                return $this->redirectToRoute('app_compagnie_select_or_create');
            }
            
            // Regular role-based redirect
            return match ($user->getRole()) {
                User::ROLE_ADMIN => $this->redirectToRoute('app_admin_index'),
                User::ROLE_MEDECIN => $this->redirectToRoute('app_medecin_dashboard'),
                User::ROLE_PATIENT => $this->redirectToRoute('app_patient_dashboard'),
                User::ROLE_DONATEUR => $this->redirectToRoute('app_donateur_dashboard'),
                default => $this->redirectToRoute('app_home'),
            };
        }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer le rôle sélectionné
            $role = $form->get('role')->getData();
            $user->setRole($role);

            // Récupérer le type de donateur depuis la requête
            $donateurType = $request->request->get('donateurType');
            if ($role === User::ROLE_DONATEUR && $donateurType) {
                $user->setDonateurType($donateurType);
            }

            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Votre compte a été créé avec succès!');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('security/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 854fb939ec2363bc375c4e1fd30ebc88ac826415
