<?php

namespace App\Repository;

use App\Entity\MesureFemme;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MesureFemme|null find($id, $lockMode = null, $lockVersion = null)
 * @method MesureFemme|null findOneBy(array $criteria, array $orderBy = null)
 * @method MesureFemme[]    findAll()
 * @method MesureFemme[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MesureFemmeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MesureFemme::class);
    }

    // /**
    //  * @return MesureFemme[] Returns an array of MesureFemme objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MesureFemme
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
