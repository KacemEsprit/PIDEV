<?php

namespace App\Repository;

use App\Entity\RapportMedical;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RapportMedical>
 *
 * @method RapportMedical|null find($id, $lockMode = null, $lockVersion = null)
 * @method RapportMedical|null findOneBy(array $criteria, array $orderBy = null)
 * @method RapportMedical[]    findAll()
 * @method RapportMedical[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RapportMedicalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RapportMedical::class);
    }
}
