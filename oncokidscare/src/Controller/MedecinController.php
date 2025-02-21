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
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        $this->addFlash('success', 'Bienvenue sur votre dashboard, médecin !');
        
        return $this->render('home/index.html.twig', [
            'user' => $user,
        ]);
    }

  
   #[Route('/create', name: 'app_create_rapport')]
public function createRapport(Request $request, EntityManagerInterface $entityManager): Response
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
    public function deleteRapport(Request $request, RapportDetat $rapport, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($rapport);
        $entityManager->flush();

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