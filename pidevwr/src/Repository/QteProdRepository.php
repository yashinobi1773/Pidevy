<?php

namespace App\Repository;

use App\Entity\QteProd;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method QteProd|null find($id, $lockMode = null, $lockVersion = null)
 * @method QteProd|null findOneBy(array $criteria, array $orderBy = null)
 * @method QteProd[]    findAll()
 * @method QteProd[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QteProdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QteProd::class);
    }

    // /**
    //  * @return QteProd[] Returns an array of QteProd objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QteProd
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
