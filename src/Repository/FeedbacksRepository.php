<?php

namespace App\Repository;

use App\Entity\Feedbacks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;

/**
 * @method Feedbacks|null find($id, $lockMode = null, $lockVersion = null)
 * @method Feedbacks|null findOneBy(array $criteria, array $orderBy = null)
 * @method Feedbacks[]    findAll()
 * @method Feedbacks[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FeedbacksRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Feedbacks::class);
    }

    // /**
    //  * @return Feedbacks[] Returns an array of Feedbacks objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Feedbacks
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function findLastest(): Query
    {
        return $this->createQueryBuilder('p')
            ->setMaxResults(3)
            ->addOrderBy('p.id', 'DESC')
            ->getQuery();
    }

    public function countAllFeedbacks()
    {
        $queryBuilder = $this->createQueryBuilder('a');
        $queryBuilder->select('COUNT(a.id) as value');

        return $queryBuilder->getQuery()->getOneOrNullResult();
    }

    public function getAllFeedbackByMonth($month)
    {
        $qb = $this->createQueryBuilder('p')
            ->select("COUNT(MONTH(p.date)) as value")
            ->where("MONTH(p.date) = $month");

        return $qb->getQuery()->getOneOrNullResult();
    }

}
