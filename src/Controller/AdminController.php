<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
<<<<<<< HEAD
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
=======
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Form\ProfileFormType;
>>>>>>> 0ed33a6b (KacemSuivi)

#[Route('/admin')]
#[IsGranted('ROLE_ADMIN')]
class AdminController extends AbstractController
{
<<<<<<< HEAD
    #[Route('/', name: 'app_admin_index')]
=======
    #[Route('/admin_dashboard', name: 'app_admin_index')]
>>>>>>> 0ed33a6b (KacemSuivi)
    public function index(UserRepository $userRepository): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();

        $admins = $userRepository->findBy(['role' => User::ROLE_ADMIN]);
        $medecins = $userRepository->findBy(['role' => User::ROLE_MEDECIN]);
        $patients = $userRepository->findBy(['role' => User::ROLE_PATIENT]);
        $donateurs = $userRepository->findBy(['role' => User::ROLE_DONATEUR]);

<<<<<<< HEAD
        return $this->render('admin/index.html.twig', [
=======
        return $this->render('admin_home/index.html.twig', [
>>>>>>> 0ed33a6b (KacemSuivi)
            'user' => $currentUser,
            'admins' => $admins,
            'medecins' => $medecins,
            'patients' => $patients,
            'donateurs' => $donateurs,
        ]);
    }
<<<<<<< HEAD
=======

 
    
    #[Route('/users', name: 'app_admin_users')]
    public function indexx(UserRepository $userRepository): Response
    {
        $allUsers = $userRepository->findAll();
        $currentUser = $this->getUser();

        return $this->render('admin_home/CrudUsers/Manage_users.html.twig', [
            'allUsers' => $allUsers,
            'user' => $currentUser,
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/profile', name: 'app_admin_profile', methods: ['GET', 'POST'])]
    public function myprofile(Request $request, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        $currentUser = $this->getUser();
        $form = $this->createForm(ProfileFormType::class, $currentUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadDir = $this->getParameter('kernel.project_dir') . '/public/uploads/user_pictures';
            
            // Handle file upload
            $pictureFile = $form->get('picture')->getData();
            if ($pictureFile) {
                // Ensure upload directory exists
                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                
                // Generate unique filename
                $newFilename = uniqid() . '.' . $pictureFile->guessExtension();
                
                try {
                    // Move the file
                    $pictureFile->move($uploadDir, $newFilename);
                    
                    // Delete old picture if exists
                    $oldPicture = $currentUser->getPicture();
                    if ($oldPicture) {
                        $oldPicturePath = $uploadDir . '/' . $oldPicture;
                        if (file_exists($oldPicturePath)) {
                            unlink($oldPicturePath);
                        }
                    }
                    
                    // Update user with new picture
                    $currentUser->setPicture($newFilename);
                    
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Error uploading picture: ' . $e->getMessage());
                    return $this->redirectToRoute('app_admin_profile');
                }
            }
            
            // Handle password if provided
            $password = $form->get('password')->getData();
            if ($password) {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $currentUser->setPassword($hashedPassword);
            }

            try {
                $entityManager->flush();
                $this->addFlash('success', 'Profile updated successfully');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Error saving profile: ' . $e->getMessage());
            }
            
            return $this->redirectToRoute('app_admin_profile');
        }

        return $this->render('admin_home/myprofile.html.twig', [
            'user' => $currentUser,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/dashboard', name: 'app_dashboard')]
    public function dashboard(): Response
    {
        $currentUser = $this->getUser();

        return $this->render('admin_home/index.html.twig', [
            'user' => $currentUser,
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/elements/buttons', name: 'app_buttons')]
    public function buttons(): Response
    {
        $currentUser = $this->getUser();

        return $this->render('admin_home/button.html.twig', [
            'user' => $currentUser,
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/elements/typography', name: 'app_typography')]
    public function typography(): Response
    {
        $currentUser = $this->getUser();

        return $this->render('admin_home/typography.html.twig', [
            'user' => $currentUser,
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/elements/other', name: 'app_other_elements')]
    public function otherElements(): Response
    {
        $currentUser = $this->getUser();

        return $this->render('admin_home/element.html.twig', [
            'user' => $currentUser,
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/widgets', name: 'app_widgets')]
    public function widgets(): Response
    {
        $currentUser = $this->getUser();

        return $this->render('admin_home/widget.html.twig', [
            'user' => $currentUser,
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/forms', name: 'app_forms')]
    public function forms(): Response
    {
        $currentUser = $this->getUser();

        return $this->render('admin_home/form.html.twig', [
            'user' => $currentUser,
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/tables', name: 'app_tables')]
    public function tables(): Response
    {
        $currentUser = $this->getUser();

        return $this->render('admin_home/table.html.twig', [
            'user' => $currentUser,
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/charts', name: 'app_charts')]
    public function charts(): Response
    {
        $currentUser = $this->getUser();

        return $this->render('admin_home/chart.html.twig', [
            'user' => $currentUser,
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/signin', name: 'app_signin')]
    public function signin(): Response
    {
        $currentUser = $this->getUser();

        return $this->render('admin_home/signin.html.twig', [
            'user' => $currentUser,
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/signup', name: 'app_signup')]
    public function signup(): Response
    {
        $currentUser = $this->getUser();

        return $this->render('admin_home/signup.html.twig', [
            'user' => $currentUser,
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/404admin', name: 'app_404_admin')]
    public function error404(): Response
    {
        $currentUser = $this->getUser();

        return $this->render('admin_home/404.html.twig', [
            'user' => $currentUser,
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/appointment', name: 'app_appointment')]
    public function appointment(): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();

        return $this->render('admin_home/appointment.html.twig', [
            'controller_name' => 'AdminHomeController',
            'user' => $currentUser ? [
                'id' => $currentUser->getId(),
                'nom' => $currentUser->getPrenom(),
                'prenom' => $currentUser->getNom(),
                'email' => $currentUser->getEmail(),
                'role' => $currentUser->getRole(),
                'tel' => $currentUser->getTel(),
            ] : null,
        ]);
    }

    #[Route('/base', name: 'app_base_admin')]
    public function base(): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();

        return $this->render('base_admin.html.twig', [
            'user' => $currentUser ? [
                'id' => $currentUser->getId(),
                'nom' => $currentUser->getPrenom(),
                'prenom' => $currentUser->getNom(),
                'email' => $currentUser->getEmail(),
                'role' => $currentUser->getRole(),
                'tel' => $currentUser->getTel(),
            ] : null,
            'controller_name' => 'AdminHomeController',
        ]);
    }
>>>>>>> 0ed33a6b (KacemSuivi)
}
