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
use Knp\Component\Pager\PaginatorInterface;

class ManageUsersController extends AbstractController
{
    private $security;
    private $paginator;

    public function __construct(Security $security, PaginatorInterface $paginator)
    {
        $this->security = $security;
        $this->paginator = $paginator;
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
        $token = new CsrfToken('delete' . $user->getId(), $request->request->get('_token'));
        if (!$csrfTokenManager->isTokenValid($token)) {
            throw $this->createAccessDeniedException('Invalid CSRF token.');
        }

        $entityManager->remove($user);
        $entityManager->flush();

        if ($request->isXmlHttpRequest()) {
            return new Response(null, Response::HTTP_NO_CONTENT);
        }

        $this->addFlash('success', 'User deleted successfully.');
        return $this->redirectToRoute('app_admin_users');
    }

    #[Route('/admin/users', name: 'app_admin_users', methods: ['GET'])]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        return $this->search($request, $entityManager);
    }

    #[Route('/admin/users/search', name: 'user_search', methods: ['GET'])]
    public function search(Request $request, EntityManagerInterface $entityManager): Response
    {
        $searchTerm = $request->query->get('q', '');
        $role = $request->query->get('role', 'all');
        $page = $request->query->getInt('page', 1);
        $currentUser = $this->security->getUser();

        $queryBuilder = $entityManager->getRepository(User::class)->createQueryBuilder('u');

        if ($searchTerm) {
            $queryBuilder
                ->where('u.prenom LIKE :searchTerm')
                ->orWhere('u.nom LIKE :searchTerm')
                ->orWhere('u.email LIKE :searchTerm')
                ->orWhere('u.tel LIKE :searchTerm')
                ->setParameter('searchTerm', '%' . $searchTerm . '%');
        }

        if ($role !== 'all') {
            $queryBuilder
                ->andWhere('u.role = :role')
                ->setParameter('role', 'ROLE_' . strtoupper($role));
        }

        $pagination = $this->paginator->paginate(
            $queryBuilder,
            $page,
            10 // Items per page
        );

        if ($request->isXmlHttpRequest()) {
            return $this->render('admin_home/CrudUsers/_users_table.html.twig', [
                'allUsers' => $pagination,
                'user' => $currentUser
            ]);
        }

        return $this->render('admin_home/CrudUsers/Manage_users.html.twig', [
            'allUsers' => $pagination,
            'searchTerm' => $searchTerm,
            'user' => $currentUser
        ]);
    }
}
