<?php
namespace App\Controller;

<<<<<<< HEAD
use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Flasher\Prime\FlasherInterface;
=======
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Mime\Email;
use App\Form\LoginFormType;
>>>>>>> 0ed33a6b (KacemSuivi)

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
<<<<<<< HEAD
    public function login(AuthenticationUtils $authenticationUtils, FlasherInterface $flasher): Response
    {
        // Redirect if already logged in
        if ($this->getUser()) {
            /** @var User $user */
            $user = $this->getUser();
            
            // Add flash message before redirect
            $flasher->addSuccess('Bienvenue sur votre dashboard, médecin !');


            // Redirect based on role
=======
    public function login(AuthenticationUtils $authenticationUtils, Request $request): Response
    {
        // Redirect if the user is already logged in
        if ($this->getUser()) {
            /** @var User $user */
            $user = $this->getUser();
>>>>>>> 0ed33a6b (KacemSuivi)
            return match ($user->getRole()) {
                User::ROLE_ADMIN => $this->redirectToRoute('app_admin_index'),
                User::ROLE_MEDECIN => $this->redirectToRoute('app_medecin_dashboard'),
                User::ROLE_PATIENT => $this->redirectToRoute('app_patient_dashboard'),
                User::ROLE_DONATEUR => $this->redirectToRoute('app_donateur_dashboard'),
                default => $this->redirectToRoute('app_home'),
            };
        }

<<<<<<< HEAD
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
=======
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
>>>>>>> 0ed33a6b (KacemSuivi)
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

<<<<<<< HEAD
    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
=======

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('Cette méthode peut être vide - elle sera interceptée par la clé de déconnexion de votre pare-feu.');
    }

    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
>>>>>>> 0ed33a6b (KacemSuivi)
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
<<<<<<< HEAD
            // Only allow registration as PATIENT or DONATEUR
            $role = $form->get('role')->getData();
            if (!in_array($role, [User::ROLE_PATIENT, User::ROLE_DONATEUR])) {
                throw new \InvalidArgumentException('Invalid role for registration');
            }

            // encode the plain password
=======
            $role = $form->get('role')->getData();
            if (!in_array($role, [User::ROLE_PATIENT, User::ROLE_DONATEUR])) {
                throw new \InvalidArgumentException('Rôle invalide pour l\'inscription.');
            }

>>>>>>> 0ed33a6b (KacemSuivi)
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

<<<<<<< HEAD
            $entityManager->persist($user);
            $entityManager->flush();

            // Add a flash message
            $this->addFlash('success', 'Your account has been created. Please log in.');

            // Redirect to login page after registration
=======
            $user->setRole($role);
            $entityManager->persist($user);
            $entityManager->flush();

            $email = (new Email())
                ->from('Kacem.benbrahim07@gmail.com')
                ->to($user->getEmail())
                ->subject('Bienvenue sur OncoKidsCare !')
                ->text('Merci de vous être inscrit chez nous.');

            $mailer->send($email);

            $this->addFlash('success', 'Votre compte a été créé. Veuillez vous connecter.');
>>>>>>> 0ed33a6b (KacemSuivi)
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
>>>>>>> 0ed33a6b (KacemSuivi)
