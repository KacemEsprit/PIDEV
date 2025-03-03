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
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Update;
#[Route('/groups')]
class ChatGroupController extends AbstractController
{
    private HubInterface $hub;
    
    public function __construct(HubInterface $hub)
{
    $this->hub = $hub;
}
    
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
        GroupMessageRepository $messageRepository,
        HubInterface $hub
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

             $update = new Update(
                "/groups/{$group->getId()}/messages",
                json_encode([
                    'id' => $message->getId(),
                    'content' => $message->getContent(),
                    'sender' => [
                        'id' => $message->getSender()->getId(),
                        'name' => $message->getSender()->getPrenom() . ' ' . $message->getSender()->getNom(),
                    ],
                    'sentAt' => $message->getSentAt()->format('Y-m-d H:i:s'),
                    'type' => $message->getType(),
                ])
            );
  
                $hub->publish($update);
          
            return $this->redirectToRoute('app_chat_group_show', ['id' => $group->getId()]);
        }
        }

        // Récupérer les messages
        $messages = $messageRepository->findBy(
            ['chatGroup' => $group],
            ['sentAt' => 'ASC']
        );

        return $this->render('chat_group/show.html.twig', [
            'group' => $group,
            'messages' => $messages,
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

    #[Route('/{id}/voice-message', name: 'app_chat_group_voice_message', methods: ['POST'])]
    public function uploadVoiceMessage(
        Request $request, 
        ChatGroup $group, 
        EntityManagerInterface $em
    ): Response {
        // Vérifier si l'utilisateur est membre du groupe
        if (!$group->getMembers()->contains($this->getUser())) {
            return $this->json(['error' => 'Vous n\'êtes pas membre de ce groupe'], 403);
        }

        /** @var UploadedFile $audioFile */
        $audioFile = $request->files->get('audio');
        $duration = $request->request->get('duration');

        if (!$audioFile) {
            return $this->json(['error' => 'Aucun fichier audio fourni'], 400);
        }

        try {
            // Générer un nom de fichier unique
            $fileName = md5(uniqid()) . '.webm';
            $uploadDir = $this->getParameter('voice_messages_directory');

            // Créer le répertoire s'il n'existe pas
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            // Déplacer le fichier
            $audioFile->move($uploadDir, $fileName);

            // Créer le message
            $message = new GroupMessage();
            $message->setChatGroup($group);
            $message->setSender($this->getUser());
            $message->setType(GroupMessage::TYPE_VOICE);
            $message->setVoiceUrl('/uploads/voice-messages/' . $fileName);
            $message->setDuration((int) $duration);

            $em->persist($message);
            $em->flush();

            return $this->json([
                'id' => $message->getId(),
                'voiceUrl' => $message->getVoiceUrl(),
                'duration' => $message->getDuration(),
                'sender' => [
                    'id' => $message->getSender()->getId(),
                    'name' => $message->getSender()->getPrenom() . ' ' . $message->getSender()->getNom()
                ],
                'sentAt' => $message->getSentAt()->format('Y-m-d H:i:s')
            ]);

        } catch (\Exception $e) {
            return $this->json([
                'error' => 'Erreur lors de l\'enregistrement du message vocal: ' . $e->getMessage()
            ], 500);
        }
    }

    #[Route('/message/{id}/delete', name: 'app_chat_message_delete', methods: ['POST'])]
    public function deleteMessage(
        GroupMessage $message,
        EntityManagerInterface $em
    ): Response {
        // Vérifier que l'utilisateur est l'auteur du message
        if ($message->getSender() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas supprimer ce message');
        }

        $groupId = $message->getChatGroup()->getId();
        $em->remove($message);
        $em->flush();

        // Si c'est un message vocal, supprimer le fichier
        if ($message->getType() === GroupMessage::TYPE_VOICE && $message->getVoiceUrl()) {
            $filePath = $this->getParameter('kernel.project_dir') . '/public' . $message->getVoiceUrl();
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        return $this->redirectToRoute('app_chat_group_show', ['id' => $groupId]);
    }

    #[Route('/message/{id}/edit', name: 'app_chat_message_edit', methods: ['POST'])]
    public function editMessage(
        Request $request,
        GroupMessage $message,
        EntityManagerInterface $em
    ): Response {
        // Vérifier que l'utilisateur est l'auteur du message
        if ($message->getSender() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas modifier ce message');
        }

        // On ne peut modifier que les messages texte
        if ($message->getType() !== GroupMessage::TYPE_TEXT) {
            throw $this->createAccessDeniedException('Ce type de message ne peut pas être modifié');
        }

        $content = $request->request->get('content');
        if (!empty($content)) {
            $message->setContent($content);
            $em->flush();
        }

        return $this->json([
            'success' => true,
            'content' => $message->getContent()
        ]);
    }
}