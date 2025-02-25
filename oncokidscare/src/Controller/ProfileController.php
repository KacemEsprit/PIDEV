<?php

namespace App\Controller;
use App\Entity\User;
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
                // Define the upload directory (same as in admin profile)
                $uploadDir = $this->getParameter('kernel.project_dir') . '/public/uploads/user_pictures';
    
                // Ensure the upload directory exists
                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
    
                // Generate a unique filename
                $newFilename = uniqid() . '.' . $pictureFile->guessExtension();
    
                try {
                    // Move the file to the upload directory
                    $pictureFile->move($uploadDir, $newFilename);
    
                    // Delete the old picture if it exists
                    $oldPicture = $user->getPicture();
                    if ($oldPicture) {
                        $oldPicturePath = $uploadDir . '/' . $oldPicture;
                        if (file_exists($oldPicturePath)) {
                            unlink($oldPicturePath);
                        }
                    }
    
                    // Update the user with the new picture
                    $user->setPicture($newFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Error uploading picture: ' . $e->getMessage());
                    return $this->redirectToRoute('app_patient_profile');
                }
            }
    
            // Save changes to the database
            try {
                $entityManager->flush();
                $this->addFlash('success', 'Profile updated successfully');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Error saving profile: ' . $e->getMessage());
            }
    
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
            // Define the upload directory (same as in patient profile)
            $uploadDir = $this->getParameter('kernel.project_dir') . '/public/uploads/user_pictures';

            // Ensure the upload directory exists
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            // Generate a unique filename
            $newFilename = uniqid() . '.' . $pictureFile->guessExtension();

            try {
                // Move the file to the upload directory
                $pictureFile->move($uploadDir, $newFilename);

                // Delete the old picture if it exists
                $oldPicture = $user->getPicture();
                if ($oldPicture) {
                    $oldPicturePath = $uploadDir . '/' . $oldPicture;
                    if (file_exists($oldPicturePath)) {
                        unlink($oldPicturePath);
                    }
                }

                // Update the user with the new picture
                $user->setPicture($newFilename);
            } catch (\Exception $e) {
                $this->addFlash('error', 'Error uploading picture: ' . $e->getMessage());
                return $this->redirectToRoute('app_donateur_profile');
            }
        }

        // Save changes to the database
        try {
            $entityManager->flush();
            $this->addFlash('success', 'Profile updated successfully');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Error saving profile: ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_donateur_profile');
    }

    return $this->render('donateur/myprofile.html.twig', [
        'form' => $form->createView(),
        'user' => $user,
    ]);
}

}
