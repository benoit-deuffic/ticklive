<?php


namespace App\Application\Product\Search;


use App\Domain\Bus\Query\QueryHandler;
use App\Domain\Entity\Product;
use App\Infrastructure\Adapter\DBAL\ProductRepository;

final class BusSearchProduct implements QueryHandler
{
    public function __construct( ProductRepository $repository)
    {
    }

public function __invoke(BusSearchProductQuery $query) : BusSearchProductResponse
    {
    $email = $this->repository->findById(
            $query->id()
        );

    if ($email === null) {
        throw new InvalidArgumentException('Product unreachable');
    }

    return new BusSearchProductResponse(
               $product,
               );
    }
}