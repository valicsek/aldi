<?php
// src/Repository/ProductRepository.php
namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function findBySearchQuery(string $searchQuery)
    {
        $qb = $this->createQueryBuilder('p');

        $qb->where($qb->expr()->like('p.name', ':searchQuery'))
           ->orWhere($qb->expr()->like('p.description', ':searchQuery'))
           ->setParameter('searchQuery', '%' . $searchQuery . '%');

        return $qb->getQuery()->getResult();
    }
}
?>