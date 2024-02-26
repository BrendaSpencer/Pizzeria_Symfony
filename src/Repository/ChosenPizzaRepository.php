<?php

namespace App\Repository;

use App\Entity\ChosenPizza;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ChosenPizza>
 *
 * @method ChosenPizza|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChosenPizza|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChosenPizza[]    findAll()
 * @method ChosenPizza[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChosenPizzaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChosenPizza::class);
    }

    //    /**
    //     * @return ChosenPizza[] Returns an array of ChosenPizza objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?ChosenPizza
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
