<?php

namespace App\Security\Voter;

use App\Entity\Publication;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Security;

class PublicationVoter extends Voter
{
    public const EDIT = 'PUBLICATION_EDIT';
    public const DELETE = 'PUBLICATION_DELETE';

    public function __construct(
        private Security $security
    ) {}

    protected function supports(string $attribute, mixed $subject): bool
    {
        return in_array($attribute, [self::EDIT, self::DELETE])
            && $subject instanceof Publication;
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

        /** @var Publication $publication */
        $publication = $subject;

        return match($attribute) {
            self::EDIT => $this->canEdit($publication, $user),
            self::DELETE => $this->canDelete($publication, $user),
            default => false
        };
    }

    private function canEdit(Publication $publication, UserInterface $user): bool
    {
        // L'auteur peut modifier sa publication
        return $user === $publication->getUser();
    }

    private function canDelete(Publication $publication, UserInterface $user): bool
    {
        // L'auteur peut supprimer sa publication
        return $user === $publication->getUser();
    }
}
