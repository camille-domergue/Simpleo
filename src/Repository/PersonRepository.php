<?php
/**
 * Created by PhpStorm.
 * User: steven
 * Date: 2019-03-12
 * Time: 19:30
 */

namespace App\Repository;


use App\Entity\Person;
use App\Entity\User;

class PersonRepository extends \Doctrine\ORM\EntityRepository
{
    public function getCustomers()
    {
        $qb = $this->createQueryBuilder('p')
            //->where('p.user = :user')

            //->where('p.type = :type')
           // ->setParameter('type','customer')
            //->setParameter('user', $user->getId())
            ->orderBy('p.lastname', 'desc');
        return $qb->getQuery()->getResult();
    }
}