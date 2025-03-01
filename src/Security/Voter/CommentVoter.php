<?php

namespace App\Security\Voter;

use App\Entity\Comment;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Security;

class CommentVoter extends Voter
{
    public const EDIT = 'COMMENT_EDIT';
    public const DELETE = 'COMMENT_DELETE';

    public function __construct(
        private Security $security
    ) {}

    protected function supports(string $attribute, mixed $subject): bool
    {
        return in_array($attribute, [self::EDIT, self::DELETE])
            && $subject instanceof Comment;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();
        
        if (!$user instanceof UserInterface) {
            return false;
        }

        // Les admins peuvent tout faire
        if ($this->security->isGranted('ROLE_ADMIN')) {
            return true;
        }

        /** @var Comment $comment */
        $comment = $subject;

        return match($attribute) {
            self::EDIT => $this->canEdit($comment, $user),
            self::DELETE => $this->canDelete($comment, $user),
            default => false
        };
    }

    private function canEdit(Comment $comment, UserInterface $user): bool
    {
        // L'auteur peut modifier son commentaire
        return $user === $comment->getUser();
    }

    private function canDelete(Comment $comment, UserInterface $user): bool
    {
        // L'auteur peut supprimer son commentaire
        return $user === $comment->getUser();
    }
}
