<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Repository\RapportDetatRepository;

#[Route('/patient')]
#[IsGranted('ROLE_PATIENT')]
class PatientController extends AbstractController
{
    #[Route('/dashboard', name: 'app_patient_dashboard')]
    public function dashboard(): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        
        return $this->render('patient/dashboard.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/rapports', name: 'app_patient_rapports')]
    public function viewRapports(RapportDetatRepository $rapportRepository): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        
        $rapports = $rapportRepository->findBy(['patient' => $user], ['dateRapport' => 'DESC']);
        
        return $this->render('patient/rapport.html.twig', [
            'rapports' => $rapports,
            'user' => $user,
        ]);
    }
}
