<?php


namespace App\Application\Product\Search;


use App\Domain\Bus\Query\Query;

final class BusSearchProductQuery implements Query
{
    public function __construct(private int $id)
    {
    }

    public function id() : int
    {
        return $this->id;
    }
}