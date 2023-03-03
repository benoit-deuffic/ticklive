<?php

namespace App\Infrastructure\Adapter\Mock;

use App\Domain\Entity\Product;
use App\Domain\Persister\ProductInterface;


final class ProductPersister implements ProductInterface
{
    public function __construct()
    {
    }

    public function save(Product $entity, bool $flush = false): array
    {
        return ['create' => $entity];
    }

    public function remove(Product $entity, bool $flush = false): array
    {
        return ['remove' => $entity];
    }
}

