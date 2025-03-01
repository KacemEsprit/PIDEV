<?php

namespace App\Repository;

use App\Entity\GroupMessage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GroupMessage>
 *
 * @method GroupMessage|null find($id, $lockMode = null, $lockVersion = null)
 * @method GroupMessage|null findOneBy(array $criteria, array $orderBy = null)
 * @method GroupMessage[]    findAll()
 * @method GroupMessage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroupMessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GroupMessage::class);
    }

    public function findLatestMessages(int $chatGroupId, int $limit = 50): array
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.chatGroup = :chatGroupId')
            ->setParameter('chatGroupId', $chatGroupId)
            ->orderBy('m.sentAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
