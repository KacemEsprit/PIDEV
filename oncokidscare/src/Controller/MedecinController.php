<?php

namespace App\Controller;

use App\Entity\RapportDetat;
use App\Form\RapportDetatType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\RapportDetatRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Flasher\Prime\FlasherInterface;

use App\Form\MedecinProfileType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/medecin')]
#[IsGranted('ROLE_MEDECIN')]
class MedecinController extends AbstractController
{
    #[Route('/dashboardd', name: 'app_medecin_dashboard')]
    public function dashboard(): Response
    {
        
        $user = $this->getUser();
        $this->addFlash('success', 'Bienvenue sur votre dashboard, médecin !');
        
       /*  return $this->render('home/index.html.twig', */
        return $this->render('medecin2/dashboard.html.twig',
        [
            'user' => $user,
        ]);
    }
    #[Route('/dashboard_patient/{id}', name: 'app_patient_statistic',requirements: ['id' => '\d+'])]
    public function dashboardPatient(UserRepository $userRepo,RapportDetatRepository $rapportRepo, $id): Response
    {
       
       $rapport = $rapportRepo->find($id);
       $patient=$userRepo->find($rapport->getPatient());
       if (!$rapport) {
        $this->addFlash('error', 'Rapport non trouvé');
        return $this->redirectToRoute('app_medecin_dashboard');
    }
        $this->addFlash('success', 'Bienvenue sur votre dashboard, médecin !');
        
       
        return $this->render('medecin/dashboardcycle.html.twig',
        [
            'patient' => $patient,
            'rapport' => $rapport,
        ]); 

    }


    #[Route('/cycle', name: 'app_medecin_cycle_de_traitement')]
    public function cycle(UserRepository $userRepo, RapportDetatRepository $rapportRepo): Response
    {
        
        $patients = $userRepo->findPatients();
    
        return $this->render('medecin/cycledetraiment.html.twig', [
            
            'patients' => $patients
        ]);
    }
    

  

    #[Route('/profile', name: 'app_medecin_profile')]
    public function profile(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();

        $form = $this->createForm(MedecinProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle profile picture upload
            $pictureFile = $form->get('picture')->getData();
            if ($pictureFile) {
                // Define the upload directory similar to the other profile methods
                $uploadDir = $this->getParameter('kernel.project_dir') . '/public/uploads/user_pictures';

                // Ensure the upload directory exists
                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                // Generate a unique filename for the picture
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

                    // Update the user with the new picture filename
                    $user->setPicture($newFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Error uploading picture: ' . $e->getMessage());
                    return $this->redirectToRoute('app_medecin_profile');
                }
            }

            // Save changes to the database
            try {
                $entityManager->flush();
                $this->addFlash('success', 'Profile updated successfully');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Error saving profile: ' . $e->getMessage());
            }

            return $this->redirectToRoute('app_medecin_profile');
        }

        return $this->render('medecin/myprofile.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    
    

  
   #[Route('/create', name: 'app_create_rapport')]
public function createRapport(Request $request, EntityManagerInterface $entityManager, FlasherInterface $flasher): Response
{
    $rapport = new RapportDetat();
    $form = $this->createForm(RapportDetatType::class, $rapport);
    $form->handleRequest($request);

    if ($form->isSubmitted()) {
        if ($form->isValid()) {
            try {
                $rapport->setMedecin($this->getUser());
              
                if (!$rapport->getDateRapport()) {
                    $rapport->setDateRapport(new \DateTime());
                }

                $entityManager->persist($rapport);
                $entityManager->flush();
                $flasher->success('Rapport ajouté avec succès.');
                // Rediriger vers la liste des rapports après succès
                return $this->redirectToRoute('app_medecin_rapports');

            } catch (\Exception $e) {
                return $this->render('medecin/appointment.html.twig', [
                    'form' => $form->createView(),
                    'jsonResponse' => json_encode([
                        'message' => 'Erreur lors de la création du rapport',
                        'success' => false,
                        'toast' => [
                            'type' => 'error',
                            'message' => 'Erreur lors de la création du rapport : ' . $e->getMessage()
                        ]
                    ])
                ]);
            }
        } else {
            $errors = [];
            foreach ($form->getErrors(true) as $error) {
                $errors[] = $error->getMessage();
            }

            return $this->render('medecin/appointment.html.twig', [
                'form' => $form->createView(),
                'jsonResponse' => json_encode([
                    'success' => false,
                    'errors' => $errors,
                    'toast' => [
                        'type' => 'error',
                        'message' => 'Le formulaire contient des erreurs. Veuillez les corriger.'
                    ]
                ])
            ]);
        }
    }

    return $this->render('medecin/appointment.html.twig', [
        'form' => $form->createView()
    ]);
}

    #[Route('/patients/rapports', name: 'app_medecin_rapports', methods: ['GET'])]
    public function showAllRapports(UserRepository $userRepo, RapportDetatRepository $rapportRepo): Response
    {
        $patients = $userRepo->findPatients();
        $rapports = $rapportRepo->findAll();
        return $this->render('medecin/rapports.html.twig', [
            'patients' => $patients,
            'rapports' => $rapports
        ]);
    }

   
    #[Route('/rapport/edit/{id}', name: 'app_medecin_edit_rapport', methods: ['GET', 'POST'])]
    public function editRapport(Request $request, RapportDetat $rapport, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RapportDetatType::class, $rapport);
        
        if ($request->isMethod('POST')) {
            if ($request->isXmlHttpRequest()) {
                $data = json_decode($request->getContent(), true);
                $form->submit($data['rapport_detat'] ?? $request->request->all());
            } else {
                $form->handleRequest($request);
            }

            if ($form->isValid()) {
                try {
                    
                    $entityManager->flush();
                    $successMessage = sprintf('Le rapport pour %s a été modifié avec succès!', 
                        $rapport->getPatient()->getNom() . ' ' . $rapport->getPatient()->getPrenom());
                    
                    if ($request->isXmlHttpRequest()) {
                        return new JsonResponse([
                            'success' => true,
                            'message' => $successMessage,
                            'redirect' => $this->generateUrl('app_medecin_rapports')
                        ]);
                    }
                        return $this->redirectToRoute('app_medecin_rapports');


                } catch (\Exception $e) {
                    $errorMessage = 'Une erreur est survenue lors de la modification du rapport';
                    
                    if ($request->isXmlHttpRequest()) {
                        return new JsonResponse([
                            'success' => false,
                            'message' => $errorMessage
                        ], 500);
                    }
                    
                    $this->addFlash('error', $errorMessage);
                }
            }
        }

        return $this->render('medecin/_edit_rapport_modal.html.twig', [
            'rapport' => $rapport,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/rapport/delete/{id}', name: 'app_medecin_delete_rapport', methods: ['DELETE'])]
    public function deleteRapport(Request $request, RapportDetat $rapport, EntityManagerInterface $entityManager,FlasherInterface $flasher): Response
    {
        $entityManager->remove($rapport);
        $entityManager->flush();
        $flasher->success('Rapport supprimé avec succès');

        if ($request->isXmlHttpRequest()) {
            return $this->json(['message' => 'Rapport supprimé avec succès']);
        }

        $this->addFlash('success', 'Le rapport a été supprimé avec succès');
        return $this->redirectToRoute('app_medecin_rapports');
    }

    //aymen
     #[Route('/DoctorAvailability', name: 'app_doctor_availability_legacy')]
    public function doctorAvailabilityLegacy(): Response
    {
        return $this->redirectToRoute('app_doctor_availability');
    }

}