<?php

namespace ContainerZflUgVZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SQXkyLFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sQXkyLF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sQXkyLF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'corporation' => ['privates', '.errored..service_locator.sQXkyLF.App\\Entity\\Corporations', NULL, 'Cannot autowire service ".service_locator.sQXkyLF": it references class "App\\Entity\\Corporations" but no such service exists.'],
        ], [
            'corporation' => 'App\\Entity\\Corporations',
        ]);
    }
}
