<?php


namespace App\Application\Product\Search;

use App\Infrastructure\Adapter\Mock\ProductRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(
    name: 'app:mock-search-product',
    description: 'Mock: search a Product.',
    hidden: false,
)]

class MockSearchProductCommand extends Command
{
    private $repository;

    public function __construct(ProductRepository $repository, bool $requirePassword = false)
    {
        // best practices recommend to call the parent constructor first and
        // then set your own properties. That wouldn't work in this case
        // because configure() needs the properties set in this constructor
        $this->requirePassword = $requirePassword;

        $this->repository = $repository;

        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('product-id',  InputArgument::REQUIRED, 'Product Id')
            ->setHelp('This command allows you to search a product');
        ;
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $id = $input->getArgument('product-id');

        $product = $this->repository->getProductById($id);
        var_dump($product);

        return Command::SUCCESS;
    }

}