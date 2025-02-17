<?php

namespace App\Repository;

use App\Entity\DoctorAvailability;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class DoctorAvailabilityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DoctorAvailability::class);
    }

    public function findAvailabilityForDateTime(User $doctor, \DateTime $dateTime): ?DoctorAvailability
    {
        return $this->createQueryBuilder('da')
            ->where('da.doctor = :doctor')
            ->andWhere('da.availableFrom <= :dateTime')
            ->andWhere('da.availableTo >= :dateTime')
            ->setParameter('doctor', $doctor)
            ->setParameter('dateTime', $dateTime)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
