<?php

namespace App\Repository;

use App\Entity\ChatGroup;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ChatGroup>
 *
 * @method ChatGroup|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChatGroup|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChatGroup[]    findAll()
 * @method ChatGroup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChatGroupRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChatGroup::class);
    }

    /**
     * Trouve tous les groupes dont l'utilisateur est membre ou propriétaire
     */
    public function findGroupsForUser(User $user): array
    {
        return $this->createQueryBuilder('g')
            ->leftJoin('g.members', 'm')
            ->where('g.owner = :user')
            ->orWhere('m = :user')
            ->setParameter('user', $user)
            ->orderBy('g.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve tous les groupes publics
     */
    public function findPublicGroups(): array
    {
        return $this->createQueryBuilder('g')
            ->where('g.isPublic = :isPublic')
            ->setParameter('isPublic', true)
            ->orderBy('g.theme', 'ASC')
            ->addOrderBy('g.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
