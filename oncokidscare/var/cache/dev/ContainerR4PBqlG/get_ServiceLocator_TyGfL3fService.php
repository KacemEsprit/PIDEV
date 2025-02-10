<?php

namespace ContainerR4PBqlG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TyGfL3fService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TyGfL3f' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TyGfL3f'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'publication' => ['privates', '.errored..service_locator.TyGfL3f.App\\Entity\\Publication', NULL, 'Cannot autowire service ".service_locator.TyGfL3f": it needs an instance of "App\\Entity\\Publication" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'publication' => 'App\\Entity\\Publication',
        ]);
    }
}
