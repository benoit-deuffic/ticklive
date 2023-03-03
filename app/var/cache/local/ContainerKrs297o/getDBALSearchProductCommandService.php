<?php

namespace ContainerKrs297o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDBALSearchProductCommandService extends App_KernelLocalDebugContainer
{
    /**
     * Gets the private 'App\Application\Product\Search\DBALSearchProductCommand' shared autowired service.
     *
     * @return \App\Application\Product\Search\DBALSearchProductCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Symfony/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Application/Product/Search/DBALSearchProductCommand.php';

        $container->privates['App\\Application\\Product\\Search\\DBALSearchProductCommand'] = $instance = new \App\Application\Product\Search\DBALSearchProductCommand(($container->privates['App\\Infrastructure\\Adapter\\DBAL\\ProductRepository'] ?? $container->load('getProductRepositoryService')));

        $instance->setName('app:dbal-search-product');
        $instance->setDescription('Mock: search a Product.');

        return $instance;
    }
}