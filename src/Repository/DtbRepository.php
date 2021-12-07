<?php

namespace App\Repository;

use App\Entity\Dtb;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Dtb|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dtb|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dtb[]    findAll()
 * @method Dtb[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DtbRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dtb::class);
    }

    // /**
    //  * @return Dtb[] Returns an array of Dtb objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Dtb
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
