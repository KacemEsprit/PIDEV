<?php

namespace ContainerF2ck4Ep;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommentService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.Xz_hH6b.App\Entity\Comment' shared service.
     *
     * @return \App\Entity\Comment
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot autowire service ".service_locator.Xz_hH6b": it needs an instance of "App\\Entity\\Comment" but this type has been excluded in "config/services.yaml".');
    }
}
