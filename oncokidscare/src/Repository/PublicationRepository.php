<?php

namespace App\Repository;

use App\Entity\Publication;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Publication>
 *
 * @method Publication|null find($id, $lockMode = null, $lockVersion = null)
 * @method Publication|null findOneBy(array $criteria, array $orderBy = null)
 * @method Publication[]    findAll()
 * @method Publication[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PublicationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Publication::class);
    }

    public function save(Publication $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Publication $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findAllOrderedByDate(): array
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.datePb', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByCategory(string $category): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.category = :category')
            ->andWhere('p.status = :status')
            ->setParameter('category', $category)
            ->setParameter('status', 'approved')
            ->orderBy('p.datePb', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function createQueryBuilderOrderedByDate()
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.datePb', 'DESC');
    }

    public function createQueryBuilderByCategory(string $category)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.category = :category')
            ->setParameter('category', $category)
            ->orderBy('p.datePb', 'DESC');
    }

    public function getPublicationsPerMonth(): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = '
            SELECT DATE_FORMAT(date_pb, "%Y-%m") as month,
                   COUNT(*) as count
            FROM publication
            GROUP BY month
            ORDER BY month ASC
        ';
        return $conn->fetchAllAssociative($sql);
    }

    public function getPublicationsPerCategory(): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = '
            SELECT category, COUNT(*) as count
            FROM publication
            GROUP BY category
        ';
        return $conn->fetchAllAssociative($sql);
    }

    public function getTotalLikes(): int
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = '
            SELECT COUNT(*) as count 
            FROM publication_like 
            WHERE publication_id IS NOT NULL
        ';
        return (int) $conn->fetchOne($sql);
    }

    public function getActiveUsersCount(): int
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = '
            SELECT COUNT(DISTINCT user_id) as count
            FROM publication
            WHERE date_pb >= DATE_SUB(NOW(), INTERVAL 30 DAY)
        ';
        return (int) $conn->fetchOne($sql);
    }
}