<?php

namespace App\Repository;

use App\Entity\MesureHomme1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MesureHomme1|null find($id, $lockMode = null, $lockVersion = null)
 * @method MesureHomme1|null findOneBy(array $criteria, array $orderBy = null)
 * @method MesureHomme1[]    findAll()
 * @method MesureHomme1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MesureHomme1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MesureHomme1::class);
    }

    // /**
    //  * @return MesureHomme1[] Returns an array of MesureHomme1 objects
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
    public function findOneBySomeField($value): ?MesureHomme1
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
