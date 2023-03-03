<?php


namespace App\Domain\Persister;
use App\Domain\Entity\Product;
use Doctrine\ORM\Mapping\Entity;

interface ProductInterface
{
    /**
     * @param Entity $entity
     *
     * @return void
     */
    public function save(Product $entity, bool $flush = false): array ;

    /**
     * @param Entity $entity
     *
     * @return void
     */
    public function remove(Product $entity, bool $flush = false): array ;
}