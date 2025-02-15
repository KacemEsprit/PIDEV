<?php

namespace App\Controller;

<<<<<<< HEAD
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
use Flasher\Prime\FlasherInterface;
=======
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
>>>>>>> 0ed33a6b (KacemSuivi)

#[Route('/medecin')]
#[IsGranted('ROLE_MEDECIN')]
class MedecinController extends AbstractController
{
    #[Route('/dashboard', name: 'app_medecin_dashboard')]
<<<<<<< HEAD
    public function dashboard(FlasherInterface $flasher): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        $flasher->addSuccess('Bienvenue sur votre dashboard, médecin !');
=======
    public function dashboard(): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
>>>>>>> 0ed33a6b (KacemSuivi)
        
        return $this->render('medecin/dashboard.html.twig', [
            'user' => $user,
        ]);
    }
<<<<<<< HEAD

    #[Route('/create', name: 'app_create_rapport')]
    public function createRapport(Request $request, EntityManagerInterface $entityManager, UserRepository $userRepo, FlasherInterface $flasher): Response
    {
        try {
            $rapport = new RapportDetat();
            $form = $this->createForm(RapportDetatType::class, $rapport);
            $form->handleRequest($request);
            
            if ($form->isSubmitted() && $form->isValid()) {
                try {
                    // Définir le médecin comme l'utilisateur courant
                    $rapport->setMedecin($this->getUser());
                    
                    // Définir la date si non définie
                    if (!$rapport->getDateRapport()) {
                        $rapport->setDateRapport(new \DateTime());
                    }

                    $entityManager->persist($rapport);
                    $entityManager->flush();

                    $flasher->addSuccess(sprintf('Le rapport pour le patient %s a été créé avec succès !', 
                        $rapport->getPatient()->getNom() . ' ' . $rapport->getPatient()->getPrenom()
                    ));
                    

                    return $this->redirectToRoute('app_create_rapport');
                } catch (\Exception $e) {
                    $flasher->addError('Erreur lors de la sauvegarde du rapport : ' . $e->getMessage());
                    return $this->redirectToRoute('app_create_rapport');
                }
            } elseif ($form->isSubmitted()) {
                $flasher->addError('Le formulaire contient des erreurs. Veuillez les corriger.');
            }

            return $this->render('medecin/appointment.html.twig', [
                'form' => $form->createView()
            ]);
        } catch (\Exception $e) {
            $flasher->addError('Une erreur inattendue est survenue : ' . $e->getMessage());
            return $this->redirectToRoute('app_create_rapport');
        }
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
    public function editRapport(Request $request, RapportDetat $rapport, EntityManagerInterface $entityManager, FlasherInterface $flasher): Response
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
                        $flasher->addSuccess(sprintf('Le rapport a été modifié avec succès!', 
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
            $flasher->addSuccess('Le rapport a été modifié avec succès');
            return $this->redirectToRoute('app_medecin_rapports');
        }

        return $this->render('medecin/edit_rapport.html.twig', [
            'rapport' => $rapport,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/rapport/delete/{id}', name: 'app_medecin_delete_rapport', methods: ['DELETE'])]
    public function deleteRapport(Request $request, RapportDetat $rapport, EntityManagerInterface $entityManager, FlasherInterface $flasher): Response
    {
        $entityManager->remove($rapport);
        $entityManager->flush();

        if ($request->isXmlHttpRequest()) {
            return $this->json(['message' => 'Rapport supprimé avec succès']);
        }

        $flasher->addSuccess('Le rapport a été supprimé avec succès');
        return $this->redirectToRoute('app_medecin_rapports');
    }

=======
>>>>>>> 0ed33a6b (KacemSuivi)
}
