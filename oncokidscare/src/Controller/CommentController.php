<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Publication;
use App\Form\CommentType;
use App\Repository\CommentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Security\Voter\CommentVoter;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

#[Route('/comment')]
class CommentController extends AbstractController
{
    #[Route('/', name: 'app_comment_index', methods: ['GET'])]
    public function index(CommentRepository $commentRepository): Response
    {
        return $this->render('comment/index.html.twig', [
            'comments' => $commentRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_comment_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CommentRepository $commentRepository): Response
    {
        $comment = new Comment();
        $comment->setcreatedAt(new \DateTime());

        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentRepository->save($comment, true);

            return $this->redirectToRoute('app_comment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('comment/new.html.twig', [
            'comment' => $comment,
            'form' =>$form->createView(), 
        ]);
    }

    #[Route('/{id}', name: 'app_comment_show', methods: ['GET'])]
    public function show(Comment $comment): Response
    {
        return $this->render('comment/show.html.twig', [
            'comment' => $comment,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_comment_edit', methods: ['GET', 'POST'])]
    #[IsGranted(CommentVoter::EDIT, subject: 'comment')]
    public function edit(Request $request, Comment $comment, CommentRepository $commentRepository): Response
    {
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentRepository->save($comment, true);

            return $this->redirectToRoute('app_publication_show', [
                'id' => $comment->getPublication()->getId()
            ], Response::HTTP_SEE_OTHER);
        }

        return $this->render('comment/edit.html.twig', [
            'comment' => $comment,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_comment_delete', methods: ['POST'])]
    #[IsGranted(CommentVoter::DELETE, subject: 'comment')]
    public function delete(Request $request, Comment $comment, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$comment->getId(), $request->request->get('_token'))) {
            $publication = $comment->getPublication();
            $entityManager->remove($comment);
            $entityManager->flush();

            $this->addFlash('success', 'Commentaire supprimé avec succès.');
            
            return $this->redirectToRoute('app_publication_show', ['id' => $publication->getId()]);
        }

        throw new AccessDeniedException('Token CSRF invalide.');
    }

    #[Route('/{id}/voice-comment', name: 'app_comment_voice', methods: ['POST'])]
    public function uploadVoiceComment(
        Request $request, 
        Publication $publication,
        EntityManagerInterface $em
    ): Response {
        // Vérifier que l'utilisateur est connecté
        if (!$this->getUser()) {
            return $this->json(['error' => 'Vous devez être connecté'], 403);
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

            // Créer le commentaire
            $comment = new Comment();
            $comment->setPublication($publication);
            $comment->setUser($this->getUser());
            $comment->setType(Comment::TYPE_VOICE);
            $comment->setVoiceUrl('/uploads/voice-messages/' . $fileName);
            $comment->setDuration((int) $duration);
            $comment->setCreatedAt(new \DateTimeImmutable());
            $comment->setContenuCom('Message vocal'); // Ajouter un contenu par défaut

            $em->persist($comment);
            $em->flush();

            return $this->json([
                'success' => true,
                'id' => $comment->getId(),
                'voiceUrl' => $comment->getVoiceUrl(),
                'duration' => $comment->getDuration(),
                'sender' => [
                    'id' => $comment->getUser()->getId(),
                    'name' => $comment->getUser()->getPrenom() . ' ' . $comment->getUser()->getNom(),
                    'role' => $comment->getUser()->getRole()
                ],
                'createdAt' => $comment->getCreatedAt()->format('Y-m-d H:i:s')
            ], 200);

        } catch (\Exception $e) {
            return $this->json([
                'error' => 'Erreur lors de l\'enregistrement du message vocal: ' . $e->getMessage()
            ], 500);
        }
    }
}