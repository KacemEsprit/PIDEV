<?php

namespace ContainerF2ck4Ep;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Md_U7iWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.md.U7iW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.md.U7iW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'publication' => ['privates', '.errored..service_locator.md.U7iW.App\\Entity\\Publication', NULL, 'Cannot autowire service ".service_locator.md.U7iW": it needs an instance of "App\\Entity\\Publication" but this type has been excluded in "config/services.yaml".'],
            'publicationRepository' => ['privates', 'App\\Repository\\PublicationRepository', 'getPublicationRepositoryService', true],
        ], [
            'publication' => 'App\\Entity\\Publication',
            'publicationRepository' => 'App\\Repository\\PublicationRepository',
        ]);
    }
}
