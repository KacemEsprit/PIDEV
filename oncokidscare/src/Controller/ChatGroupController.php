<?php

namespace App\Controller;

use App\Entity\ChatGroup;
use App\Entity\GroupMessage;
use App\Form\ChatGroupType;
use App\Form\GroupMessageType;
use App\Repository\ChatGroupRepository;
use App\Repository\GroupMessageRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/groups')]
class ChatGroupController extends AbstractController
{
    #[Route('/', name: 'app_chat_group_index', methods: ['GET'])]
    public function index(ChatGroupRepository $chatGroupRepository): Response
    {
        $user = $this->getUser();
        $userGroups = $chatGroupRepository->findGroupsForUser($user);
        $publicGroups = $chatGroupRepository->findPublicGroups();

        return $this->render('chat_group/index.html.twig', [
            'user_groups' => $userGroups,
            'public_groups' => $publicGroups,
            'owned_groups' => $user->getOwnedGroups(),
        ]);
    }

    #[Route('/new', name: 'app_chat_group_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $group = new ChatGroup();
        $group->setOwner($this->getUser());

        $form = $this->createForm(ChatGroupType::class, $group);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Ajouter le créateur comme membre
            $group->addMember($this->getUser());
            
            $em->persist($group);
            $em->flush();

            return $this->redirectToRoute('app_chat_group_show', ['id' => $group->getId()]);
        }

        return $this->render('chat_group/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_chat_group_show', methods: ['GET', 'POST'])]
    public function show(
        Request $request,
        ChatGroup $group,
        EntityManagerInterface $em,
        GroupMessageRepository $messageRepository
    ): Response {
        // Vérifier l'accès au groupe
        if (!$group->isPublic() && !$group->getMembers()->contains($this->getUser())) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas membre de ce groupe privé');
        }

        // Formulaire pour nouveau message (seulement pour les membres)
        $canPostMessage = $group->getMembers()->contains($this->getUser());
        $form = null;
        
        if ($canPostMessage) {
            $message = new GroupMessage();
            $message->setSender($this->getUser());
            $message->setChatGroup($group);

            $form = $this->createForm(GroupMessageType::class, $message);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em->persist($message);
                $em->flush();

                return $this->redirectToRoute('app_chat_group_show', ['id' => $group->getId()]);
            }
        }

        return $this->render('chat_group/show.html.twig', [
            'group' => $group,
            'messages' => $messageRepository->findBy(['chatGroup' => $group], ['sentAt' => 'ASC']),
            'form' => $form ? $form->createView() : null,
            'can_post_message' => $canPostMessage,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_chat_group_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ChatGroup $group, EntityManagerInterface $em): Response
    {
        // Vérifier que l'utilisateur est le propriétaire du groupe
        if ($group->getOwner() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas le propriétaire de ce groupe');
        }

        $form = $this->createForm(ChatGroupType::class, $group);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('app_chat_group_show', ['id' => $group->getId()]);
        }

        return $this->render('chat_group/edit.html.twig', [
            'group' => $group,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/join', name: 'app_chat_group_join', methods: ['POST'])]
    public function join(ChatGroup $group, EntityManagerInterface $em): Response
    {
        // Vérifier que le groupe est public
        if (!$group->isPublic()) {
            throw $this->createAccessDeniedException('Ce groupe n\'est pas public');
        }

        // Vérifier si l'utilisateur n'est pas déjà membre
        $user = $this->getUser();
        if ($group->getMembers()->contains($user)) {
            $this->addFlash('warning', 'Vous êtes déjà membre de ce groupe');
            return $this->redirectToRoute('app_chat_group_show', ['id' => $group->getId()]);
        }

        // Ajouter l'utilisateur comme membre
        $group->addMember($user);
        $em->flush();

        $this->addFlash('success', 'Vous avez rejoint le groupe avec succès !');
        return $this->redirectToRoute('app_chat_group_show', ['id' => $group->getId()]);
    }

    #[Route('/{id}/members/add', name: 'app_chat_group_add_member', methods: ['POST'])]
    public function addMember(Request $request, ChatGroup $group, UserRepository $userRepository, EntityManagerInterface $em): Response
    {
        // Vérifier que l'utilisateur est le propriétaire du groupe
        if ($group->getOwner() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas le propriétaire de ce groupe');
        }

        $userId = $request->request->get('user_id');
        $user = $userRepository->find($userId);

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        if (!$group->getMembers()->contains($user)) {
            $group->addMember($user);
            $em->flush();
        }

        return $this->redirectToRoute('app_chat_group_show', ['id' => $group->getId()]);
    }

    #[Route('/{id}/members/remove/{userId}', name: 'app_chat_group_remove_member', methods: ['POST'])]
    public function removeMember(ChatGroup $group, int $userId, UserRepository $userRepository, EntityManagerInterface $em): Response
    {
        // Vérifier que l'utilisateur est le propriétaire du groupe
        if ($group->getOwner() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas le propriétaire de ce groupe');
        }

        $user = $userRepository->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        if ($user === $group->getOwner()) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas retirer le propriétaire du groupe');
        }

        $group->removeMember($user);
        $em->flush();

        return $this->redirectToRoute('app_chat_group_show', ['id' => $group->getId()]);
    }
}