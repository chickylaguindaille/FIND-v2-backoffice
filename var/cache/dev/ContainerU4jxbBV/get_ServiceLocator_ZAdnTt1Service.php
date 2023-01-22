<?php

namespace ContainerU4jxbBV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZAdnTt1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zAdnTt1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zAdnTt1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'chicken' => ['privates', '.errored..service_locator.zAdnTt1.App\\Entity\\Chicken', NULL, 'Cannot autowire service ".service_locator.zAdnTt1": it references class "App\\Entity\\Chicken" but no such service exists.'],
            'chickenRepository' => ['privates', 'App\\Repository\\ChickenRepository', 'getChickenRepositoryService', true],
        ], [
            'chicken' => 'App\\Entity\\Chicken',
            'chickenRepository' => 'App\\Repository\\ChickenRepository',
        ]);
    }
}
