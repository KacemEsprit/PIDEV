<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use App\Form\EditUserFormType;

class ManageUsersController extends AbstractController
{
    #[Route('/admin/users/edit/{id}', name: 'user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EditUserFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'User updated successfully');
            return $this->redirectToRoute('app_admin_users');
        }

        return $this->render('admin_home/CrudUsers/EditUsers.html.twig', [
            'user' => $user,
            'form' => $form->createView()
        ]);
    }

    #[Route('/admin/users/delete/{id}', name: 'user_delete', methods: ['DELETE'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($user);
        $entityManager->flush();
    
        $this->addFlash('success', 'User deleted successfully.');
    
        return $this->redirectToRoute('app_admin_users');
    }
}
