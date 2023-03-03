<?php

namespace ContainerKrs297o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMockCreateProductCommandService extends App_KernelLocalDebugContainer
{
    /**
     * Gets the private 'App\Application\Product\Create\MockCreateProductCommand' shared autowired service.
     *
     * @return \App\Application\Product\Create\MockCreateProductCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Symfony/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Application/Product/Create/MockCreateProductCommand.php';
        include_once \dirname(__DIR__, 4).'/src/Domain/Persister/ProductInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Adapter/Mock/ProductPersister.php';

        $container->privates['App\\Application\\Product\\Create\\MockCreateProductCommand'] = $instance = new \App\Application\Product\Create\MockCreateProductCommand(new \App\Infrastructure\Adapter\Mock\ProductPersister());

        $instance->setName('app:mock-create-product');
        $instance->setAliases([0 => 'app:mock-add-product']);
        $instance->setDescription('Mock: Creates a new Product.');

        return $instance;
    }
}