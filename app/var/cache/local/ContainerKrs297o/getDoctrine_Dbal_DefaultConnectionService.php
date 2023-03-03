<?php

namespace ContainerKrs297o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Dbal_DefaultConnectionService extends App_KernelLocalDebugContainer
{
    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Symfony/vendor/doctrine/dbal/src/Connection.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Symfony/vendor/doctrine/doctrine-bundle/ConnectionFactory.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Symfony/vendor/doctrine/dbal/src/Configuration.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Symfony/vendor/doctrine/dbal/src/Driver/Middleware.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Symfony/vendor/doctrine/doctrine-bundle/Middleware/ConnectionNameAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Symfony/vendor/doctrine/doctrine-bundle/Middleware/DebugMiddleware.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Symfony/vendor/symfony/doctrine-bridge/Middleware/Debug/DebugDataHolder.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Symfony/vendor/doctrine/doctrine-bundle/Middleware/BacktraceDebugDataHolder.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Symfony/vendor/doctrine/event-manager/src/EventManager.php';
        include_once \dirname(__DIR__, 4).'/src/Infrastructure/Symfony/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php';

        $a = new \Doctrine\DBAL\Configuration();

        $b = new \Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware(new \Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder([]), ($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
        $b->setConnectionName('default');

        $a->setMiddlewares([0 => $b]);

        return $container->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory($container->parameters['doctrine.dbal.connection_factory.types']))->createConnection(['dbname' => 'project', 'host' => 'db', 'port' => 5432, 'user' => 'project', 'password' => 'secret', 'driver' => 'pdo_pgsql', 'charset' => 'utf8', 'driverOptions' => [], 'serverVersion' => '11', 'defaultTableOptions' => []], $a, new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', true],
            'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber' => ['privates', 'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber', 'getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService', true],
            'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber' => ['privates', 'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber', 'getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService', true],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
            'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber' => '?',
            'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber' => '?',
        ]), [0 => 'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber', 1 => 'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber', 2 => [0 => [0 => 'loadClassMetadata'], 1 => 'doctrine.orm.default_listeners.attach_entity_listeners']]), []);
    }
}