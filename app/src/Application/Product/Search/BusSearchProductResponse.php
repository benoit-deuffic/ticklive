<?php


namespace App\Application\Product\Search;


use App\Domain\Bus\Query\Response;
use App\Domain\Entity\Product;

class BusSearchProductResponse implements Response
{
    private $product;
    public function __construct( ProductDto $product)
    {
    }

    public function product() : Product
    {
        return $this->product;
    }
}