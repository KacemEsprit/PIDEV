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
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
use App\Form\MedecinProfileType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
 use Symfony\Contracts\HttpClient\HttpClientInterface;
#[Route('/medecin')]
#[IsGranted('ROLE_MEDECIN')]
class MedecinController extends AbstractController
{
    #[Route('/dashboardd', name: 'app_medecin_dashboard')]
    public function dashboard(): Response
    {
        
        $user = $this->getUser();
        $this->addFlash('success', 'Bienvenue sur votre dashboard, médecin !');
        
       
        return $this->render('medecin/dashboard.html.twig',
        [
            'user' => $user,
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
                $this->addFlash('success', 'Rapport creer   !');
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
        
        if ($request->isMethod('POST') && $request->isXmlHttpRequest()) {
            $data = json_decode($request->getContent(), true);
            $form->submit($data['rapport_detat'] ?? $request->request->all());
    
            if ($form->isValid()) {
                try {
                    $entityManager->flush();
                    
                    $successMessage = sprintf(
                        'Le rapport pour %s a été modifié avec succès!',
                        $rapport->getPatient()->getNom() . ' ' . $rapport->getPatient()->getPrenom()
                    );
    
                    $this->addFlash('success', $successMessage);
                    
                    return new JsonResponse([
                        'success' => true,
                        'reload' => true  // Signal au JS de recharger la page
                    ]);
    
                } catch (\Exception $e) {
                    $errorMessage = 'Une erreur est survenue lors de la modification du rapport';
                    
                    $this->addFlash('error', $errorMessage);
    
                    return new JsonResponse([
                        'success' => false,
                        'reload' => false
                    ], 500);
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
        

        if ($request->isXmlHttpRequest()) {
           
            $this->addFlash('success', 'Le rapport a été supprimé avec succès');
            
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




/*
#[Route('/dashboard_patient/{id}', name: 'app_patient_statistic', requirements: ['id' => '\d+'])]
public function dashboardPatient(ChartBuilderInterface $chartBuilder,UserRepository $userRepository,RapportDetatRepository $rapportRepo, int $id): Response
{
    // Récupérer tous les rapports du patient triés par date
    $rapports = $rapportRepo->findByPatientIdOrdered($id);
    $user = $userRepository->find($id);
    if (!$rapports) {
        $this->addFlash('error', 'Aucun rapport trouvé pour ce patient.');
        return $this->redirectToRoute('app_medecin_dashboard');
    }

    // Préparer les données pour le graphique
    $dates = [];
    $tensions = [];

    foreach ($rapports as $rapport) {
        $dates[] = $rapport->getDateRapport()->format('Y-m-d'); // Formatage de la date
        $tensions[] = $rapport->getTensionArterielle(); // Récupération de la tension
    }

    // Création du graphique
    $chart = $chartBuilder->createChart(Chart::TYPE_LINE);

    $chart->setData([
        'labels' => ['2025-03-10', '2025-03-11', '2025-03-12', '2025-03-13', '2025-03-14'],
        'datasets' => [
            [
                'label' => 'Évolution de la Tension Artérielle',
                'backgroundColor' => 'rgba(52, 152, 219, 0.2)',
                'borderColor' => '#3498db',
                'data' => [115, 118, 121, 119, 120], // Plus de points
                'fill' => true,
                'tension' => 0.3,
            ],
        ],
    ]);
    

    $chart->setOptions([
        'scales' => [
            'y' => [
                'suggestedMin' => 60, // Min tension normale
                'suggestedMax' => 180, // Max tension normale
            ],
        ],
    ]);

    return $this->render('medecin/dashboardcycle.html.twig', [
        'chart' => $chart,
        'patient'=> $user,
    ]);
}
   #[Route('/dashboard_patient/{id}', name: 'app_patient_statistic', requirements: ['id' => '\d+'])]
public function dashboardPatient(ChartBuilderInterface $chartBuilder,UserRepository $userRepository,RapportDetatRepository $rapportRepo, int $id): Response
{   $chart = $chartBuilder->createChart(Chart::TYPE_LINE);
    $user = $userRepository->find($id);
    $chart->setData([
        'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        'datasets' => [
            [
                'label' => 'Patient Progress',
                'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                'borderColor' => 'rgba(75, 192, 192, 1)',
                'borderWidth' => 1,
                'data' => [0, 12, 19, 3, 5, 2, 3], // Replace with dynamic data if available
            ],
        ],
    ]);

    $chart->setOptions([
        'responsive' => true,
        'plugins' => [
            'legend' => [
                'position' => 'top',
            ],
            'title' => [
                'display' => true,
                'text' => 'Patient Treatment Progress Over Time'
            ],
        ],
        'scales' => [
            'y' => [
                'beginAtZero' => true,
                'suggestedMax' => 25,
            ],
        ],
    ]);

    return $this->render('medecin/dashboardcycle.html.twig', [
        'chart' => $chart,
        'patient'=> $user,
    ]);

}    
*/

#[Route('/dashboard_patient/{id}', name: 'app_patient_statistic', requirements: ['id' => '\d+'])]
public function dashboardPatient(UserRepository $userRepository, RapportDetatRepository $rapportRepo, int $id, Request $request): Response
{
    $rapports = $rapportRepo->findByPatientIdOrdered($id);
    $user = $userRepository->find($id);
    
    if (!$rapports) {
        $this->addFlash('error', 'Aucun rapport trouvé pour ce patient.');
        return $this->redirectToRoute('app_medecin_cycle_de_traitement');
    }
    $prediction = $request->query->get('prediction', 'Aucune');


    $dates = [];
    $tensions = [];
    $pouls = [];
    $temperatures = [];
    $saturations = [];

  
    $frequences = [
        'Quotidien' => 0,
        'Hebdomadaire' => 0,
        'Mensuel' => 0,
        'Autre' => 0
    ];

    $pertesSang = [
        'Quotidien' => 0,
        'Hebdomadaire' => 0,
        'Mensuel' => 0,
        'Autre' => 0
    ];

    foreach ($rapports as $rapport) {
        // Signes vitaux
        $dates[] = $rapport->getDateRapport()->format('Y-m-d');
        $tensions[] = $rapport->getTensionArterielle();
        $pouls[] = $rapport->getPouls();
        $temperatures[] = $rapport->getTemperature();
        $saturations[] = $rapport->getSaturationOxygene();

        // Récupération de la fréquence
        $freq = strtolower($rapport->getFrequenceTraitement() ?? 'autre');
        $perteSang = $rapport->getPerteDeSang() ?? 0;

        switch ($freq) {
            case 'quotidien':
                $frequences['Quotidien']++;
                $pertesSang['Quotidien'] += $perteSang;
                break;
            case 'hebdomadaire':
                $frequences['Hebdomadaire']++;
                $pertesSang['Hebdomadaire'] += $perteSang;
                break;
            case 'mensuel':
                $frequences['Mensuel']++;
                $pertesSang['Mensuel'] += $perteSang;
                break;
            default:
                $frequences['Autre']++;
                $pertesSang['Autre'] += $perteSang;
                break;
        }
    }


    $lastReport = end($rapports); // équivalent array_pop() sans retirer l'élément
    $ewsScore = 0;

    // Vérification des seuils
    $tension = $lastReport->getTensionArterielle();
    $poulsVal = $lastReport->getPouls();
    $temp = $lastReport->getTemperature();
    $sat = $lastReport->getSaturationOxygene();

    // Tension trop basse (<90) ou trop haute (>160)
    if ($tension < 90 || $tension > 160) {
        $ewsScore += 3;
    }
    // Pouls trop faible (<50) ou trop élevé (>120)
    if ($poulsVal < 50 || $poulsVal > 120) {
        $ewsScore += 2;
    }
    // Température anormale (<35°C ou >38°C)
    if ($temp < 35 || $temp > 38) {
        $ewsScore += 2;
    }
    // Saturation O2 < 92%
    if ($sat < 92) {
        $ewsScore += 3;
    }
   // On peut récupérer la date du dernier rapport pour l'afficher
   $lastReportDate = $lastReport->getDateRapport()->format('Y-m-d');
   
    $pertesSangMoyennes = [];
    foreach ($pertesSang as $key => $val) {
        if ($frequences[$key] > 0) {
            $pertesSangMoyennes[$key] = round($val / $frequences[$key], 2);
        } else {
            $pertesSangMoyennes[$key] = 0;
        }
    }

    return $this->render('medecin/dashboardcycle.html.twig', [
        'patient' => $user,
        'dates' => $dates,
        'tensions' => $tensions,
        'pouls' => $pouls,
        'temperatures' => $temperatures,
        'saturations' => $saturations,
        'frequences' => $frequences,
        'pertesSang' => $pertesSangMoyennes,
        'ewsScore' => $ewsScore,
        'lastReportDate' => $lastReportDate,
        'prediction' => $prediction,
    ]);
}

private HttpClientInterface $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    #[Route('/prediction/{id}', name: 'app_medecin_prediction')]
    public function prediction(int $id, RapportDetatRepository $rapportRepo): Response
    {
        // 1) Récupérer le dernier rapport du patient
        $rapports = $rapportRepo->findByPatientIdOrdered($id);
        if (!$rapports) {
            $this->addFlash('error', 'Aucun rapport trouvé pour ce patient.');
            return $this->redirectToRoute('app_medecin_dashboard');
        }
        $lastRapport = end($rapports);

        // 2) Construire les "features" (mêmes noms qu’en Python)
        $features = [
            'age'                 => $lastRapport->getAge() ?? 0,
            'sexe'                => ($lastRapport->getSexe() === 'Homme') ? 1 : 0,
            'tension_arterielle'  => $lastRapport->getTensionArterielle() ?? 0,
            'pouls'               => $lastRapport->getPouls() ?? 0,
            'temperature'         => $lastRapport->getTemperature() ?? 0.0,
            'saturation_oxygene'  => $lastRapport->getSaturationOxygene() ?? 0,
            'imc'                 => $lastRapport->getImc() ?? 0.0,
            'niveau_douleur'      => $lastRapport->getNiveauDouleur() ?? 0,
            'traitement'          => $this->mapTraitement($lastRapport->getTraitement()),
            'dose_medicament'     => $lastRapport->getDoseMedicament() ?? 0.0,
            'frequence_traitement'=> $this->mapFrequence($lastRapport->getFrequenceTraitement()),
            'perte_sang'          => $lastRapport->getPerteDeSang() ?? 0.0,
            'temps_operation'     => $lastRapport->getTempsOperation() ?? 0,
            'duree_seance'        => $lastRapport->getDureeSeance() ?? 0,
            'filtration_sang'     => $lastRapport->getFiltrationSang() ?? 0.0,
            'creatinine'          => $lastRapport->getCreatinine() ?? 0.0,
            'score_glasgow'       => $lastRapport->getScoreGlasgow() ?? 15,
            'respiration_assistee'=> $lastRapport->getRespirationAssistee() ? 1 : 0,
            'complications'       => $this->mapComplications($lastRapport->getComplications()),
        ];

        dump($features);  // Pour debug : voir les valeurs dans la barre de debug

        // 3) Appel à l’API Flask
        $flaskUrl = 'http://127.0.0.1:5000/predict';
        try {
            // On envoie le JSON sous la forme {"features": { ... }}
            $response = $this->client->request('POST', $flaskUrl, [
                'json' => [
                    'features' => $features
                ]
            ]);

            // 4) Traitement de la réponse
            $data = $response->toArray();  // Convertit le JSON en tableau PHP
            if (isset($data['prediction'])) {
                // ex: "prediction": ["Modéré"]
                $prediction = $data['prediction'][0] ?? 'Inconnu';
                $this->addFlash('success', 'Prediction : ' . $prediction);
                return $this->redirectToRoute('app_patient_statistic', [
                    'id' => $id,
                    'prediction' => $prediction
                ]);
            } else {
                $this->addFlash('error', 'Réponse inattendue de l’API Flask.');
            }

        } catch (\Exception $e) {
            // 5) En cas d’erreur, on affiche l’exception et le JSON qu’on a envoyé
            $this->addFlash(
                'error',
                'Erreur lors de l\'appel de l\'API Prediction Etat : ' 
                . $e->getMessage() 
                . ' | features = ' 
                . json_encode($features)
            );
        }

        // 6) Rediriger vers la page dashboard (avec l'id du patient)
        return $this->redirectToRoute('app_patient_statistic', [
            'id' => $id,
        ]);
    }


private function mapTraitement($traitement){
    $traitement = strtolower(trim($traitement ?? ''));
    switch($traitement){
        case 'chirurgie':
            return 0;
        case 'chimiothérapie':
            return 1;
        case 'dialyse':
            return 2;
        case 'réanimation':
            return 3;
        default:
            return 0;
    };

}
private function mapFrequence($frequence){
    $freq=strtolower(trim($frequence ?? 'aucune'));
    return match ($freq) 
    {
        'hebdomadaire' => 1,
        'mensuel'      => 2,
        'quotidien'    => 3,
        default        => 0,
    };

}

private function mapComplications(?string $comp): int
{
    $comp = strtolower(trim($comp ?? ''));
    if($comp === ''||$comp === null){
        return 0;
    }
    return random_int(1, 3);

}






}