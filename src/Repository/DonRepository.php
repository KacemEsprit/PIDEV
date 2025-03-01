<?php

namespace App\Repository;

use App\Entity\Don;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Don>
 *
 * @method Don|null find($id, $lockMode = null, $lockVersion = null)
 * @method Don|null findOneBy(array $criteria, array $orderBy = null)
 * @method Don[]    findAll()
 * @method Don[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Don::class);
    }

    public function save(Don $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Don $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return Don[] Returns an array of Don objects for a specific user
     */
    public function findByUser(User $user): array
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.donateur = :user')
            ->setParameter('user', $user)
            ->orderBy('d.date_don', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @return Don[] Returns an array of Don objects with specific status
     */
    public function findByStatut(string $statut): array
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.statut = :statut')
            ->setParameter('statut', $statut)
            ->orderBy('d.date_don', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * Get total donations amount
     */
    public function getTotalDonations(): float
    {
        $result = $this->createQueryBuilder('d')
            ->select('SUM(d.montant)')
            ->andWhere('d.statut = :statut')
            ->setParameter('statut', 'Validé')
            ->getQuery()
            ->getSingleScalarResult()
        ;

        return $result ? (float) $result : 0.0;
    }

    /**
     * @return Don[] Returns recent donations
     */
    public function findRecentDons(int $limit = 5): array
    {
        return $this->createQueryBuilder('d')
            ->orderBy('d.date_don', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult()
        ;
    }

    public function getDonationStatistics(): array
{
    return $this->createQueryBuilder('d')
        ->select('d.type_don, COUNT(d.id) as count, SUM(d.montant) as totalAmount')
        ->groupBy('d.type_don')
        ->getQuery()
        ->getResult();
}


public function getDonationStatsByDate(): array
{
    return $this->createQueryBuilder('d')
        ->select("DATE(d.date_don) as donation_date, 
                  SUM(CASE WHEN d.type_don = 'financiere' THEN d.montant ELSE 0 END) as total_financial,
                  COUNT(CASE WHEN d.type_don = 'materielle' THEN 1 ELSE NULL END) as total_material")
        ->groupBy('donation_date')
        ->orderBy('donation_date', 'ASC')
        ->getQuery()
        ->getResult();
}


}
