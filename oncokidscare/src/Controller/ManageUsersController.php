<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use App\Form\EditUserFormType;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Core\Security;

class ManageUsersController extends AbstractController
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

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

    #[Route('/admin/users/delete/{id}', name: 'user_delete', methods: ['POST', 'DELETE'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager, CsrfTokenManagerInterface $csrfTokenManager): Response
    {
        // Check if the request method is POST and convert it to DELETE
        if ($request->getMethod() === 'POST') {
            $request->setMethod('DELETE');
        }

        // Validate CSRF token
        $token = new CsrfToken('delete' . $user->getId(), $request->request->get('_token'));
        if (!$csrfTokenManager->isTokenValid($token)) {
            throw $this->createAccessDeniedException('Invalid CSRF token.');
        }

        // Delete the user
        $entityManager->remove($user);
        $entityManager->flush();

        // Add a success message
        $this->addFlash('success', 'User deleted successfully.');

        // Redirect to the user management page
        return $this->redirectToRoute('app_admin_users');
    }

    #[Route('/admin/users/search', name: 'user_search', methods: ['GET'])]
    public function search(Request $request, EntityManagerInterface $entityManager): Response
    {
        $searchTerm = $request->query->get('q', '');
        $currentUser = $this->security->getUser();

        $users = $entityManager->getRepository(User::class)->createQueryBuilder('u')
            ->where('u.prenom LIKE :searchTerm')
            ->orWhere('u.nom LIKE :searchTerm')
            ->orWhere('u.email LIKE :searchTerm')
            ->orWhere('u.tel LIKE :searchTerm')
            ->setParameter('searchTerm', '%' . $searchTerm . '%')
            ->getQuery()
            ->getResult();

        return $this->render('admin_home/CrudUsers/Manage_users.html.twig', [
            'allUsers' => $users,
            'searchTerm' => $searchTerm,
            'user' => $currentUser
        ]);
    }
}
