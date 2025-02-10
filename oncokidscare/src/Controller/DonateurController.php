<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/donateur')]
#[IsGranted('ROLE_DONATEUR')]
class DonateurController extends AbstractController
{
    #[Route('/dashboard', name: 'app_donateur_dashboard')]
    public function dashboard(): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        
        return $this->render('donateur/dashboard.html.twig', [
            'user' => $user,
        ]);
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 854fb939ec2363bc375c4e1fd30ebc88ac826415
