<?php


namespace App\Infrastructure\Http;

use App\Application\Product\Search\BusSearchProductQuery;
use App\Domain\Bus\Query\QueryBus;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Service\Attribute\SubscribedService;

class GetProductActionController extends AbstractController
{
    private $responder;
    private $queryBus;

    public function __construct(SearchProductResponder $responder, QueryBus $queryBus)
     {
     }

    public static function getSubscribedServices(): array
    {
        // TODO: Implement getSubscribedServices() method.
        return array();
    }

    public function __invoke(Request $request, int $id): Response
    {
        try {
            /** @var BusSearchProductResponse $searchProductResponse */
            $searchProductResponse = $this->queryBus->ask(
                new BusSearchProductQuery($id)
            );

            $product = $searchProductResponse->product();
            $this->
            $this->responder->loadEmail($email);
        } catch (Exception $e) {
            $this->responder->loadError($e->getMessage());
        }

        return $this->responder->response();
    }
}