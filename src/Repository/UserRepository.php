<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<User>
 *
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function findPatients(): array
    {
        return $this->createQueryBuilder('u')
            ->where('u.role LIKE :role')
            ->setParameter('role', '%ROLE_PATIENT%')
            ->getQuery()
            ->getResult();
    }

    public function findMedecins(): array
    {
        return $this->createQueryBuilder('u')
            ->where('u.role LIKE :role')
            ->setParameter('role', '%ROLE_MEDECIN%')
            ->getQuery()
            ->getResult();
    }
}
