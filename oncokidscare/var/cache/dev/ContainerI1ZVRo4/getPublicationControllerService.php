<?php

namespace ContainerI1ZVRo4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPublicationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PublicationController' shared autowired service.
     *
     * @return \App\Controller\PublicationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'PublicationController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'string'.\DIRECTORY_SEPARATOR.'Slugger'.\DIRECTORY_SEPARATOR.'SluggerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'string'.\DIRECTORY_SEPARATOR.'Slugger'.\DIRECTORY_SEPARATOR.'AsciiSlugger.php';

        $container->services['App\\Controller\\PublicationController'] = $instance = new \App\Controller\PublicationController(($container->privates['slugger'] ??= new \Symfony\Component\String\Slugger\AsciiSlugger('en')));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\PublicationController', $container));

        return $instance;
    }
}
