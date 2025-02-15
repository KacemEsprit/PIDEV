<?php

namespace ContainerF2ck4Ep;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMigrations_SyncMetadataCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine_migrations.sync_metadata_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'SyncMetadataCommand.php';

        $container->privates['doctrine_migrations.sync_metadata_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand(($container->privates['doctrine.migrations.dependency_factory'] ?? $container->load('getDoctrine_Migrations_DependencyFactoryService')), 'doctrine:migrations:sync-metadata-storage');

        $instance->setName('doctrine:migrations:sync-metadata-storage');
        $instance->setDescription('Ensures that the metadata storage is at the latest version.');

        return $instance;
    }
}
