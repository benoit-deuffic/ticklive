<?php

namespace ContainerKrs297o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDBALCreateProductCommandService extends App_KernelLocalDebugContainer
{
    /**
     * Gets the private 'App\Application\Product\Create\DBALCreateProductCommand' shared autowired service.
     *
     * @return \App\Application\Product\Create\DBALCreateProductCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Symfony/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Application/Product/Create/DBALCreateProductCommand.php';

        $container->privates['App\\Application\\Product\\Create\\DBALCreateProductCommand'] = $instance = new \App\Application\Product\Create\DBALCreateProductCommand(($container->privates['App\\Infrastructure\\Adapter\\DBAL\\ProductPersister'] ?? $container->load('getProductPersisterService')));

        $instance->setName('app:dbal-create-product');
        $instance->setAliases([0 => 'app:dbal-add-product']);
        $instance->setDescription('Mock: Creates a new Product.');

        return $instance;
    }
}