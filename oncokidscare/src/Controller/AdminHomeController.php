<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AdminHomeController extends AbstractController
{
   /*  #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin_home/index.html.twig', [
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/dashboard', name: 'app_dashboard')]
    public function dashboard(): Response
    {
        return $this->render('admin_home/index.html.twig', [
            'controller_name' => 'AdminHomeController',
        ]);
    } */

    #[Route('/elements/buttons', name: 'app_buttons')]
    public function buttons(): Response
    {
        return $this->render('admin_home/button.html.twig', [
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/elements/typography', name: 'app_typography')]
    public function typography(): Response
    {
        return $this->render('admin_home/typography.html.twig', [
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/elements/other', name: 'app_other_elements')]
    public function otherElements(): Response
    {
        return $this->render('admin_home/element.html.twig', [
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/widgets', name: 'app_widgets')]
    public function widgets(): Response
    {
        return $this->render('admin_home/widget.html.twig', [
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/forms', name: 'app_forms')]
    public function forms(): Response
    {
        return $this->render('admin_home/form.html.twig', [
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/tables', name: 'app_tables')]
    public function tables(): Response
    {
        return $this->render('admin_home/table.html.twig', [
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/charts', name: 'app_charts')]
    public function charts(): Response
    {
        return $this->render('admin_home/chart.html.twig', [
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/signin', name: 'app_signin')]
    public function signin(): Response
    {
        return $this->render('admin_home/signin.html.twig', [
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/signup', name: 'app_signup')]
    public function signup(): Response
    {
        return $this->render('admin_home/signup.html.twig', [
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/404admin', name: 'app_404_admin')]
    public function error404(): Response
    {
        return $this->render('admin_home/404.html.twig', [
            'controller_name' => 'AdminHomeController',
        ]);
    }

    #[Route('/appointment', name: 'app_appointment')]
    public function appointment(): Response
    {
        return $this->render('admin_home/appointment.html.twig', [
            'controller_name' => 'AdminHomeController',
        ]);
    }
}