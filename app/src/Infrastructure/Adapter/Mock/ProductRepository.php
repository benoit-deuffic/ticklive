<?php

namespace App\Infrastructure\Adapter\Mock;

use App\Domain\Entity\Product;
use App\Domain\Repository\ProductInterface;

/**
 * @extends ServiceEntityRepository<Product>
 *
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
final class ProductRepository implements ProductInterface
{
    private $productCollection;

    public function __construct()
    {
        for ($i=0;$i<10;$i++) {
            $product = new Product();
            $product->setName('name-'.uniqid());
            $product->setInfo('info-'.uniqid());
            $this->productCollection[$i]= $product;
        }
    }

    public function getProductById(int $id): Product
    {
        // TODO: Implement getProductById() metdhod.
        return $this->productCollection[$id];
    }

//    /**
//     * @return Product[] Returns an array of Product objects
//     */
    public function findAll() {

        return $this->productCollection;
    }

}
