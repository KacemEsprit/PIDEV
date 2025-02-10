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

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Redirect if already logged in
        if ($this->getUser()) {
            /** @var User $user */
            $user = $this->getUser();
            
            // Redirect based on role
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
            // Only allow registration as PATIENT or DONATEUR
            $role = $form->get('role')->getData();
            if (!in_array($role, [User::ROLE_PATIENT, User::ROLE_DONATEUR])) {
                throw new \InvalidArgumentException('Invalid role for registration');
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

            // Add a flash message
            $this->addFlash('success', 'Your account has been created. Please log in.');

            // Redirect to login page after registration
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
