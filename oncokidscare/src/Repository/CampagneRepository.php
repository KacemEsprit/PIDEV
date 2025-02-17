<?php

namespace App\Repository;

use App\Entity\Campagne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Campagne>
 *
 * @method Campagne|null find($id, $lockMode = null, $lockVersion = null)
 * @method Campagne|null findOneBy(array $criteria, array $orderBy = null)
 * @method Campagne[]    findAll()
 * @method Campagne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CampagneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Campagne::class);
    }

    public function findActiveCampaigns(): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.date_debut <= :now')
            ->andWhere('c.date_fin >= :now')
            ->andWhere('c.statut = :statut')
            ->setParameter('now', new \DateTime())
            ->setParameter('statut', 'En cours')
            ->orderBy('c.date_fin', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
