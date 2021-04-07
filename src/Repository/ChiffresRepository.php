<?php

namespace App\Repository;

use App\Entity\Chiffres;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Chiffres|null find($id, $lockMode = null, $lockVersion = null)
 * @method Chiffres|null findOneBy(array $criteria, array $orderBy = null)
 * @method Chiffres[]    findAll()
 * @method Chiffres[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChiffresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Chiffres::class);
    }

    // /**
    //  * @return Chiffres[] Returns an array of Chiffres objects
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
    public function findOneBySomeField($value): ?Chiffres
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
