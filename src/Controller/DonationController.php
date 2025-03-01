<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
use App\Repository\DonRepository;
use Symfony\Component\HttpFoundation\Request;

class DonationController extends AbstractController
{
    #[Route('/faire-don', name: 'app_faire_don')]
    public function faireDon(): Response
    {
        return $this->redirectToRoute('app_don_new');
    }

    #[Route('/historique-don', name: 'app_historique_don')]
    public function historiqueDon(): Response
    {
        return $this->redirectToRoute('app_don_index');
    }

   

    
#[Route('/donation/pay', name: 'donation_pay')]
public function pay(Request $request)
{
    // Logique de paiement ici
    return $this->render('don/new.html.twig');
}

}



