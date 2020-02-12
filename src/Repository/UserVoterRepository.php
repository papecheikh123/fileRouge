<?php

namespace App\Repository;

use App\Entity\UserVoter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UserVoter|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserVoter|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserVoter[]    findAll()
 * @method UserVoter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserVoterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserVoter::class);
    }

    // /**
    //  * @return UserVoter[] Returns an array of UserVoter objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserVoter
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
