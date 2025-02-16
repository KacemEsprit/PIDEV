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
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/medecin')]
#[IsGranted('ROLE_MEDECIN')]
class MedecinController extends AbstractController
{
    #[Route('/dashboard', name: 'app_medecin_dashboard')]
    public function dashboard(): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        $this->addFlash('success', 'Bienvenue sur votre dashboard, médecin !');
        
        return $this->render('medecin/dashboard.html.twig', [
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
                    // Définir le médecin comme l'utilisateur courant
                    $rapport->setMedecin($this->getUser());
                    
                    // Définir la date si non définie
                    if (!$rapport->getDateRapport()) {
                        $rapport->setDateRapport(new \DateTime());
                    }

                    $entityManager->persist($rapport);
                    $entityManager->flush();

                    $this->addFlash('success', 'Le rapport a été créé avec succès');
                    return $this->redirectToRoute('app_medecin_rapports');
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors de la création du rapport : ' . $e->getMessage());
                }
            } else {
                $this->addFlash('error', 'Le formulaire contient des erreurs. Veuillez les corriger.');
                
                // Afficher les erreurs spécifiques
                foreach ($form->getErrors(true) as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
            }
        }

        return $this->render('medecin/appointment.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/patients/rapports', name: 'app_medecin_rapports', methods: ['GET'])]
    public function showAllRapports(UserRepository $userRepo, RapportDetatRepository $rapportRepo): Response
    {
        // Récupérer tous les patients
        $patients = $userRepo->findPatients();

        // Récupérer tous les rapports
        $rapports = $rapportRepo->findAll();

        return $this->render('medecin/rapports.html.twig', [
            'patients' => $patients,
            'rapports' => $rapports
        ]);
    }

    #[Route('/patient/{id}/rapports', name: 'app_medecin_patient_rapports', methods: ['GET'])]
    public function showPatientRapports(int $id, UserRepository $userRepo, RapportDetatRepository $rapportRepo): Response
    {
        $patient = $userRepo->find($id);

        if (!$patient) {
            throw $this->createNotFoundException('Patient non trouvé');
        }

        $rapports = $rapportRepo->findByPatientId($id);

        return $this->render('medecin/rapport.html.twig', [
            'patient' => $patient,
            'rapports' => $rapports
        ]);
    }

    #[Route('/rapport/edit/{id}', name: 'app_medecin_edit_rapport', methods: ['GET', 'POST'])]
    public function editRapport(Request $request, RapportDetat $rapport, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RapportDetatType::class, $rapport);
        
        if ($request->isXmlHttpRequest()) {
            if ($request->isMethod('POST')) {
                $content = $request->getContent();
                $data = json_decode($content, true);
                
                if (!$data) {
                    return new JsonResponse([
                        'success' => false,
                        'errors' => ['Données invalides']
                    ], 400);
                }

                $form->submit($data['rapport_detat'] ?? []);
                
                if ($form->isValid()) {
                    try {
                        $entityManager->flush();
                        $this->addFlash('success', sprintf('Le rapport a été modifié avec succès!', 
                        $rapport->getPatient()->getNom() . ' ' . $rapport->getPatient()->getPrenom()
                    ));

                        return new JsonResponse([
                            'success' => true,
                            'message' => 'Le rapport a été modifié avec succès'
                        ]);
                    } catch (\Exception $e) {
                        return new JsonResponse([
                            'success' => false,
                            'errors' => ['Une erreur est survenue lors de la sauvegarde']
                        ], 500);
                    }
                } else {
                    $errors = [];
                    foreach ($form->getErrors(true) as $error) {
                        $errors[] = $error->getMessage();
                    }
                    return new JsonResponse([
                        'success' => false,
                        'errors' => $errors
                    ], 400);
                }
            }

            return $this->render('medecin/_edit_rapport_modal.html.twig', [
                'rapport' => $rapport,
                'form' => $form->createView(),
            ]);
        }

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Le rapport a été modifié avec succès');
            return $this->redirectToRoute('app_medecin_rapports');
        }

        return $this->render('medecin/edit_rapport.html.twig', [
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

}
