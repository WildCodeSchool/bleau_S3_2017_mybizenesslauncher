<?php

namespace MBLBundle\Repository;

/**
 * SecteurRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SecteurRepository extends \Doctrine\ORM\EntityRepository
{
    public function getSecteursQueryBuilder()

    {

        return $this ->createQueryBuilder('s')
            ->select('s.secteurActivite')
            ->getQuery()
            ->getResult()
            ;

    }
}
