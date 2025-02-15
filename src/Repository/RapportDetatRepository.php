<?php

namespace App\Repository;

use App\Entity\RapportDetat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RapportDetat>
 *
 * @method RapportDetat|null find($id, $lockMode = null, $lockVersion = null)
 * @method RapportDetat|null findOneBy(array $criteria, array $orderBy = null)
 * @method RapportDetat[]    findAll()
 * @method RapportDetat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RapportDetatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RapportDetat::class);
    }

    public function save(RapportDetat $rapport, bool $flush = false): void
    {
        $this->getEntityManager()->persist($rapport);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(RapportDetat $rapport, bool $flush = false): void
    {
        $this->getEntityManager()->remove($rapport);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Trouver les rapports d’un patient donné
     */
    public function findByPatientId(int $patientId): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.patient = :patientId')
            ->setParameter('patientId', $patientId)
            ->orderBy('r.dateRapport', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouver les rapports créés après une certaine date
     */
    public function findRapportsAfterDate(\DateTimeInterface $date): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.dateRapport > :date')
            ->setParameter('date', $date)
            ->orderBy('r.dateRapport', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function getAllRepportsByPatientId(int $patientId):array{
      return $this->createQueryBuilder('r')
      ->where('r.patient=:patientId')
      ->setParameter('patientId',$patientId)
      ->orderBy('r.dateRapport','DESC')
      ->getQuery()
      ->getResult();

    }

    public function deleteRapport(RapportDetat $rapport,bool $flush=true): void
    {
        $this->getEntityManager()->remove($rapport);
        if($flush){
            $this->getEntityManager()->flush();
        }
    }

    public function addRapport(RapportDetat $rapport , bool $flush=true ): void 
    {
        $this->getEntityManager()->persist($rapport);
        if($flush){
            $this->getEntityManager()->flush();
        }
    }

}
