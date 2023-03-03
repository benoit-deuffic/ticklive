<?php


namespace App\Application\Product\Create;


use App\Domain\Bus\Command\CommandHandler;

class BusCreateProductCommandHandler implements CommandHandler
{
    public function __construct(private EmailRepository $repository)
    {
    }

public function __invoke(BusCreateProductCommand $command) : int {
    {


    }
    }
}