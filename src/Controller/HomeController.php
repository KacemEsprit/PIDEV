<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
  
    #[Route('/feature', name: 'app_feature')]
    public function index_feature(): Response
    {
        return $this->render('home/feature.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/team', name: 'app_team')]
    public function index_team(): Response
    {
        return $this->render('home/team.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
       #[Route('/about', name: 'app_about')]
    public function index_about(): Response
    {
        return $this->render('home/about.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/service', name: 'app_service')]
    public function index_service(): Response
    {
        return $this->render('home/service.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/appointment', name: 'app_appointment')]
    public function index_appointment(): Response
    {
        return $this->render('home/appointment.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/testimonial', name: 'app_testimonial')]
    public function index_testimonial(): Response
    {
        return $this->render('home/testimonial.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function index_contact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/404', name: 'app_404')]
    public function index_404(): Response
    {
        return $this->render('home/404.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}