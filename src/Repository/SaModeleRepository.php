<?php

namespace App\Repository;

use App\Entity\SaModele;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SaModele|null find($id, $lockMode = null, $lockVersion = null)
 * @method SaModele|null findOneBy(array $criteria, array $orderBy = null)
 * @method SaModele[]    findAll()
 * @method SaModele[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SaModeleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SaModele::class);
    }

    // /**
    //  * @return SaModele[] Returns an array of SaModele objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SaModele
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
