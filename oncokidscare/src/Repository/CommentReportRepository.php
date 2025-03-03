<?php

namespace App\Repository;

use App\Entity\CommentReport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CommentReport>
 *
 * @method CommentReport|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommentReport|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommentReport[]    findAll()
 * @method CommentReport[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommentReportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommentReport::class);
    }

    public function hasUserReportedComment(int $userId, int $commentId): bool
    {
        $result = $this->createQueryBuilder('cr')
            ->select('COUNT(cr.id)')
            ->where('cr.comment = :commentId')
            ->andWhere('cr.reporter = :userId')
            ->setParameter('commentId', $commentId)
            ->setParameter('userId', $userId)
            ->getQuery()
            ->getSingleScalarResult();

        return $result > 0;
    }
}
