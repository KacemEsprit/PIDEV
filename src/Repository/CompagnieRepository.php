<?php

namespace App\Repository;

use App\Entity\Compagnie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Compagnie>
 *
 * @method Compagnie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Compagnie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Compagnie[]    findAll()
 * @method Compagnie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompagnieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Compagnie::class);
    }

    public function save(Compagnie $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Compagnie $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return Compagnie[] Returns an array of Compagnie objects
     */
    public function findByNomOrSiret(string $search): array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.nom LIKE :val OR c.siret LIKE :val')
            ->setParameter('val', '%'.$search.'%')
            ->orderBy('c.nom', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @return Compagnie[] Returns an array of active Compagnie objects
     */
    public function findActiveCompagnies(): array
    {
        return $this->createQueryBuilder('c')
            ->orderBy('c.date_creation', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findExistingCompagnie(string $nom, string $siret, int $donateurId): ?Compagnie
    {
        return $this->createQueryBuilder('c')
            ->where('LOWER(c.nom) = LOWER(:nom)')
            ->orWhere('c.siret = :siret')
            ->andWhere('c.donateur = :donateurId')
            ->setParameter('nom', strtolower($nom))
            ->setParameter('siret', $siret)
            ->setParameter('donateurId', $donateurId)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function isCompagnieUnique(string $nom, string $siret, ?int $excludeId = null): bool
    {
        $qb = $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('LOWER(c.nom) = LOWER(:nom)')
            ->orWhere('c.siret = :siret')
            ->setParameter('nom', strtolower($nom))
            ->setParameter('siret', $siret);

        if ($excludeId !== null) {
            $qb->andWhere('c.id != :id')
               ->setParameter('id', $excludeId);
        }

        return (int) $qb->getQuery()->getSingleScalarResult() === 0;
    }
}
