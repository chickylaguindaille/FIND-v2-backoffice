<?php

namespace ContainerZyA5wSO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QzIfI5yService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qzIfI5y' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qzIfI5y'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ville' => ['privates', '.errored..service_locator.qzIfI5y.App\\Entity\\Ville', NULL, 'Cannot autowire service ".service_locator.qzIfI5y": it references class "App\\Entity\\Ville" but no such service exists.'],
        ], [
            'ville' => 'App\\Entity\\Ville',
        ]);
    }
}
