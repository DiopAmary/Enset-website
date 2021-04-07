<?php

namespace App\Repository;

use App\Entity\Appeldoffre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Appeldoffre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Appeldoffre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Appeldoffre[]    findAll()
 * @method Appeldoffre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppeldoffreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Appeldoffre::class);
    }

    // /**
    //  * @return Appeldoffre[] Returns an array of Appeldoffre objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Appeldoffre
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
