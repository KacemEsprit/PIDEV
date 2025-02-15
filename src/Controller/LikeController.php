<?php

namespace App\Controller;

use App\Entity\Like;
use App\Entity\Publication;
use App\Entity\Comment;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/like')]
#[IsGranted('ROLE_USER')]
class LikeController extends AbstractController
{
    #[Route('/publication/{id}', name: 'app_like_publication', methods: ['POST'])]
    public function likePublication(Publication $publication, EntityManagerInterface $entityManager): JsonResponse
    {
        $user = $this->getUser();
        
        // Vérifier si l'utilisateur a déjà liké
        $existingLike = $entityManager->getRepository(Like::class)
            ->findOneBy(['publication' => $publication, 'user' => $user]);

        if ($existingLike) {
            // Si like existe, on le supprime (unlike)
            $entityManager->remove($existingLike);
            $message = 'Publication unliked';
            $liked = false;
        } else {
            // Sinon, on crée un nouveau like
            $like = new Like();
            $like->setUser($user);
            $like->setPublication($publication);
            $entityManager->persist($like);
            $message = 'Publication liked';
            $liked = true;
        }

        $entityManager->flush();

        return new JsonResponse([
            'message' => $message,
            'liked' => $liked,
            'likeCount' => $publication->getLikeCount()
        ]);
    }

    #[Route('/comment/{id}', name: 'app_like_comment', methods: ['POST'])]
    public function likeComment(Comment $comment, EntityManagerInterface $entityManager): JsonResponse
    {
        $user = $this->getUser();
        
        // Vérifier si l'utilisateur a déjà liké
        $existingLike = $entityManager->getRepository(Like::class)
            ->findOneBy(['comment' => $comment, 'user' => $user]);

        if ($existingLike) {
            // Si like existe, on le supprime (unlike)
            $entityManager->remove($existingLike);
            $message = 'Comment unliked';
            $liked = false;
        } else {
            // Sinon, on crée un nouveau like
            $like = new Like();
            $like->setUser($user);
            $like->setComment($comment);
            $entityManager->persist($like);
            $message = 'Comment liked';
            $liked = true;
        }

        $entityManager->flush();

        return new JsonResponse([
            'message' => $message,
            'liked' => $liked,
            'likeCount' => $comment->getLikeCount()
        ]);
    }
}
