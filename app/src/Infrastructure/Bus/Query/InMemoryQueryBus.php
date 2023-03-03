<?php


namespace App\Infrastructure\Bus\Query;


use App\Domain\Bus\Query\Query;
use App\Domain\Bus\Query\QueryBus;
use App\Domain\Bus\Query\Response;

final class InMemoryQueryBus implements QueryBus
{
    private $bus;

    public function __construct(iterable $queryHandlers)
    {
        $this->bus = new MessageBus([
            new HandleMessageMiddleware(
                new HandlersLocator(
                    HandlerBuilder::fromCallables($queryHandlers),
                ),
            ),
        ]);
    }

    public function ask(Query $query): Response|null
    {
        try {
            /** @var HandledStamp $stamp */
            $stamp = $this->bus->dispatch($query)->last(HandledStamp::class);

            return $stamp->getResult();
        }

catch (NoHandlerForMessageException $e) {
    throw new InvalidArgumentException(sprintf('The query has not a valid handler: %s', $query::class));
        }
    }
}