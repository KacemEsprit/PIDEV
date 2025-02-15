<?php

namespace App\Controller;

use App\Form\PatientProfileType;
use App\Form\DonateurProfileType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class ProfileController extends AbstractController
{
    #[Route('/patient/profile', name: 'app_patient_profile')]
    public function patientProfile(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher,
        SluggerInterface $slugger
    ): Response {
        $user = $this->getUser();
        if (!$user || !in_array('ROLE_PATIENT', $user->getRoles())) {
            return $this->redirectToRoute('app_login');
        }

        $form = $this->createForm(PatientProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle password change
            if ($form->get('password')->getData()) {
                $user->setPassword(
                    $passwordHasher->hashPassword(
                        $user,
                        $form->get('password')->getData()
                    )
                );
            }

            // Handle profile picture upload
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

            return $this->redirectToRoute('app_patient_profile');
        }

        return $this->render('patient/myprofile.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    #[Route('/donateur/profile', name: 'app_donateur_profile')]
    public function donateurProfile(
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
            // Handle password change
            if ($form->get('password')->getData()) {
                $user->setPassword(
                    $passwordHasher->hashPassword(
                        $user,
                        $form->get('password')->getData()
                    )
                );
            }

            // Handle profile picture upload
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
    }
}
