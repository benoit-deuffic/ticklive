<?php


namespace App\Application\Product\Create;

use App\Domain\Entity\Product;
use App\Infrastructure\Adapter\DBAL\ProductPersister;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(
    name: 'app:dbal-create-product',
    description: 'Mock: Creates a new Product.',
    hidden: false,
    aliases: ['app:dbal-add-product']
)]

class DBALCreateProductCommand extends Command
{
    private $persister;

    public function __construct(ProductPersister $persister, bool $requirePassword = false)
    {
        // best practices recommend to call the parent constructor first and
        // then set your own properties. That wouldn't work in this case
        // because configure() needs the properties set in this constructor
        $this->requirePassword = $requirePassword;

        $this->persister = $persister;

        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('product-name',  InputArgument::REQUIRED, 'Product Name')
            ->addArgument('product-info', InputArgument::REQUIRED, 'Product Info')
            ->addArgument('product-price', InputArgument::REQUIRED, 'Product Price')
            ->addArgument('product-vatcode', InputArgument::REQUIRED, 'Product VAT code')
            ->setHelp('This command allows you to create a product');
        ;
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $name = $input->getArgument('product-name');
        $info = $input->getArgument('product-info');
        $price = $input->getArgument('product-price');
        $vatcode = $input->getArgument('product-vatcode');

        $is_food_values = [ '{"food\:true,"to-take":false}',
                            '{"food\:true,"to-take":true}',
                            '{"food\:false,"to-take":false}',
                          ];

        $product = new Product();
        $product->setName($name);
        $product->setInfo($info);
        $product->setPrice($price);
        $product->setVatCode($vatcode);
        $product->setIsFood($is_food_values[array_rand($is_food_values)]);

        $this->persister->save($product, true);
        $output->writeln('success product created');

        return Command::SUCCESS;
    }

}