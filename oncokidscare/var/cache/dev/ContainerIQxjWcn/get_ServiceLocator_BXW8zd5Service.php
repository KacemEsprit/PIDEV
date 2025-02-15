<?php

namespace ContainerIQxjWcn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BXW8zd5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BXW8zd5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BXW8zd5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'commentRepository' => ['privates', 'App\\Repository\\CommentRepository', 'getCommentRepositoryService', true],
            'publication' => ['privates', '.errored..service_locator.BXW8zd5.App\\Entity\\Publication', NULL, 'Cannot autowire service ".service_locator.BXW8zd5": it needs an instance of "App\\Entity\\Publication" but this type has been excluded in "config/services.yaml".'],
            'publicationRepository' => ['privates', 'App\\Repository\\PublicationRepository', 'getPublicationRepositoryService', true],
        ], [
            'commentRepository' => 'App\\Repository\\CommentRepository',
            'publication' => 'App\\Entity\\Publication',
            'publicationRepository' => 'App\\Repository\\PublicationRepository',
        ]);
    }
}
