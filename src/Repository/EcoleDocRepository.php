<?php

namespace App\Repository;

use App\Entity\EcoleDoc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method EcoleDoc|null find($id, $lockMode = null, $lockVersion = null)
 * @method EcoleDoc|null findOneBy(array $criteria, array $orderBy = null)
 * @method EcoleDoc[]    findAll()
 * @method EcoleDoc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EcoleDocRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EcoleDoc::class);
    }

    // /**
    //  * @return EcoleDoc[] Returns an array of EcoleDoc objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EcoleDoc
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
