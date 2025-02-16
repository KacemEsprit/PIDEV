<?php
namespace App\Controller;

use App\Entity\User;
use App\Form\LoginFormType;

use App\Form\RegistrationFormType;
use Flasher\Prime\FlasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(Request $request, AuthenticationUtils $authenticationUtils, FlasherInterface $flasher): Response
    {
        // Redirect if already logged in
        if ($this->getUser()) {
            /** @var User $user */
            $user = $this->getUser();
          
            // Add flash message before redirect
            $flasher->addSuccess('Bienvenue sur votre dashboard !');

            // Redirect based on role
            return match ($user->getRole()) {
                User::ROLE_ADMIN => $this->redirectToRoute('app_admin_index'),
                User::ROLE_MEDECIN => $this->redirectToRoute('app_medecin_dashboard'),
                User::ROLE_PATIENT => $this->redirectToRoute('app_patient_dashboard'),
                User::ROLE_DONATEUR => $this->redirectToRoute('app_donateur_dashboard'),
                default => $this->redirectToRoute('app_home'),
            };
        }

        // Create the form
        $form = $this->createForm(LoginFormType::class);

        // Handle form submission
        $form->handleRequest($request);
        
        // Get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // Last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'loginForm' => $form->createView(),
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('Cette méthode peut être vide - elle sera interceptée par la clé de déconnexion de votre pare-feu.');
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

}