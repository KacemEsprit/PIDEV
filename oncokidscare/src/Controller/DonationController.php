<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
}
