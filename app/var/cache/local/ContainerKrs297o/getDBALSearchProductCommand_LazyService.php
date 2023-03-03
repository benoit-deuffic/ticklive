<?php

namespace ContainerKrs297o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDBALSearchProductCommand_LazyService extends App_KernelLocalDebugContainer
{
    /**
     * Gets the private '.App\Application\Product\Search\DBALSearchProductCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Symfony/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Symfony/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.App\\Application\\Product\\Search\\DBALSearchProductCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('app:dbal-search-product', [], 'Mock: search a Product.', false, function () use ($container): \App\Application\Product\Search\DBALSearchProductCommand {
            return ($container->privates['App\\Application\\Product\\Search\\DBALSearchProductCommand'] ?? $container->load('getDBALSearchProductCommandService'));
        });
    }
}
