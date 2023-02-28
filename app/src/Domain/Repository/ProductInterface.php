<?php


namespace App\Domain\Repository;
use App\Domain\Entity\Product;
use Doctrine\ORM\Mapping\Entity;

interface ProductInterface
{
    /**
     * @param string $title
     *
     * @return Product
     */
    public function getProductById(string $id): Product;

}