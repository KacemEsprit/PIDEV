<?php

namespace App\Controller;

use App\Repository\CommandeRepository;
use App\Repository\LigneCommandeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
use Symfony\UX\Chartjs\Model\ChartType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/statistique')]
class StatistiqueController extends AbstractController
{
    #[Route('/', name: 'app_statistique', methods: ['GET'])]
    public function index(): Response
    {
        $currentUser = $this->getUser();
return $this->render('statistique/index.html.twig', [
        'user' => $currentUser,
    ]);        
    }

    #[Route('/data', name: 'app_statistique_data', methods: ['GET'])]
    public function getData(LigneCommandeRepository $ligneCommandeRepository): JsonResponse
    {
        $timeRange = $_GET['timeRange'] ?? 'days';

        $dateFormat = match ($timeRange) {
            'months' => 'Y-m',
            'years' => 'Y',
            default => 'Y-m-d',
        };

        $ligneCommandes = $ligneCommandeRepository->findAll();
        $medicamentData = [];

        foreach ($ligneCommandes as $ligneCommande) {
            $medicamentName = $ligneCommande->getMedicament()->getNom();
            $date = $ligneCommande->getCommande()->getDateCommande()->format($dateFormat);

            if (!isset($medicamentData[$medicamentName])) {
                $medicamentData[$medicamentName] = [];
            }

            if (!isset($medicamentData[$medicamentName][$date])) {
                $medicamentData[$medicamentName][$date] = 0;
            }

            $medicamentData[$medicamentName][$date] += $ligneCommande->getQuantite();
        }

        $allDates = [];
        if ($timeRange === 'days') {
            $startOfWeek = new \DateTime('monday this week');
            for ($i = 0; $i < 7; $i++) {
                $allDates[] = $startOfWeek->format('Y-m-d');
                $startOfWeek->modify('+1 day');
            }
        } else {
            foreach ($medicamentData as $medicament => $data) {
                $allDates = array_merge($allDates, array_keys($data));
            }
            $allDates = array_unique($allDates);
            sort($allDates);
        }

        $datasets = [];
        foreach ($medicamentData as $medicament => $data) {
            $quantities = [];
            foreach ($allDates as $date) {
                $quantities[] = $data[$date] ?? 0;
            }
            $datasets[] = [
                'label' => $medicament,
                'data' => $quantities,
                'fill' => false,
                'borderColor' => '#' . substr(md5($medicament), 0, 6),
                'tension' => 0.1,
                'pointStyle' => 'circle',
                'pointRadius' => 5,
                'pointHoverRadius' => 8,
            ];
        }

        return new JsonResponse([
            'labels' => $allDates,
            'datasets' => $datasets
        ]);
    }
}