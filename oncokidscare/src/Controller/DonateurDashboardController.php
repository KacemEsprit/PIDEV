<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Repository\DonRepository;
use App\Repository\CompagnieRepository;

#[Route('/donateur/dashboard')]
#[IsGranted('ROLE_USER')]
class DonateurDashboardController extends AbstractController
{
    #[Route('/', name: 'app_donateur_dashboard')]
    public function index(DonRepository $donRepository, CompagnieRepository $compagnieRepository): Response
    {
        $user = $this->getUser();
        $dons = $donRepository->findBy(['donateur' => $user], ['date_don' => 'DESC']);
        $compagnies = $compagnieRepository->findAll();

        return $this->render('donateur_dashboard/index.html.twig', [
            'user' => $user,
            'dons' => $dons,
            'compagnies' => $compagnies,
        ]);
    }
}
