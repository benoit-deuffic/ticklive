<?php


namespace App\Application\Product\Create;


use App\Domain\Bus\Command\Command;

final class BusCreateProductCommand implements Command
{
    public function __construct(

    ) {
    }

public function bar(): string
{
    return $this->bar;
}

}