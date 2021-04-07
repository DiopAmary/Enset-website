<?php

namespace App\Repository;

use App\Entity\Cls;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Cls|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cls|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cls[]    findAll()
 * @method Cls[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cls::class);
    }

    // /**
    //  * @return Cls[] Returns an array of Cls objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cls
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
