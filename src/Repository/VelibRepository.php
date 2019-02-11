<?php

namespace App\Repository;

use App\Entity\Velib;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class VelibRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Velib::class);
    }

    public function findAllVisible()
    {
        return $this->createQueryBuilder('v')
        ->getQuery();
    }   
}