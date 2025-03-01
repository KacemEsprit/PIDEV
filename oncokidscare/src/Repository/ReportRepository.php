<?php

namespace App\Repository;

use App\Entity\Report;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ReportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Report::class);
    }

    public function findByDoctor($doctor)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.doctor = :doctor')
            ->setParameter('doctor', $doctor)
            ->orderBy('r.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findReportByIdPatient($id){
        $result = $this->createQueryBuilder('r')
            ->andWhere('r.patient = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();

            return !empty($result) ? $result : null;
    }
}
