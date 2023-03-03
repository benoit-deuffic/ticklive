<?php


namespace App\Application\Product\List;

use App\Infrastructure\Adapter\DBAL\ProductRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(
    name: 'app:dbal-list-product',
    description: 'Mock: list Product collection.',
    hidden: false,
)]


class DBALListProductCommand extends Command
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
        $this->setHelp('This command allows you to list product collection');
        ;
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {

        $products = $this->repository->findAll();
        var_dump($products);

        return Command::SUCCESS;
    }

}