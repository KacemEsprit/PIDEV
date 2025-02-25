<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Form\DonateurProfileType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/donateur')]
#[IsGranted('ROLE_DONATEUR')]
class DonateurController extends AbstractController
{
    #[Route('/dashboard', name: 'app_donateur_dashboard')]
    public function dashboard(): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        
        return $this->redirectToRoute('app_home');
    }


    /* 
    #[Route('/profile', name: 'app_donateur_profile', methods: ['GET', 'POST'])]
    public function profile(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher,
        SluggerInterface $slugger
    ): Response {
        $user = $this->getUser();
        if (!$user || !in_array('ROLE_DONATEUR', $user->getRoles())) {
            return $this->redirectToRoute('app_login');
        }

        $form = $this->createForm(DonateurProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('password')->getData()) {
                $user->setPassword(
                    $passwordHasher->hashPassword(
                        $user,
                        $form->get('password')->getData()
                    )
                );
            }

            $pictureFile = $form->get('picture')->getData();
            if ($pictureFile) {
                $originalFilename = pathinfo($pictureFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$pictureFile->guessExtension();

                try {
                    $pictureFile->move(
                        $this->getParameter('user_pictures_directory'),
                        $newFilename
                    );
                    $user->setPicture($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'There was an error uploading your profile picture');
                }
            }

            $entityManager->flush();
            $this->addFlash('success', 'Profile updated successfully');

            return $this->redirectToRoute('app_donateur_profile');
        }

        return $this->render('donateur/myprofile.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    } */
}