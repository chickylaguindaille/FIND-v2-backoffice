<?php

namespace ContainerV6FQOFi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YLB46fCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YLB46fC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YLB46fC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ChickenController::delete' => ['privates', '.service_locator.zAdnTt1', 'get_ServiceLocator_ZAdnTt1Service', true],
            'App\\Controller\\ChickenController::edit' => ['privates', '.service_locator.zAdnTt1', 'get_ServiceLocator_ZAdnTt1Service', true],
            'App\\Controller\\ChickenController::index' => ['privates', '.service_locator.k9W2UrP', 'get_ServiceLocator_K9W2UrPService', true],
            'App\\Controller\\ChickenController::new' => ['privates', '.service_locator.k9W2UrP', 'get_ServiceLocator_K9W2UrPService', true],
            'App\\Controller\\ChickenController::show' => ['privates', '.service_locator.AhlX4P8', 'get_ServiceLocator_AhlX4P8Service', true],
            'App\\Controller\\CorporationsController::delete' => ['privates', '.service_locator.azozVe8', 'get_ServiceLocator_AzozVe8Service', true],
            'App\\Controller\\CorporationsController::edit' => ['privates', '.service_locator.azozVe8', 'get_ServiceLocator_AzozVe8Service', true],
            'App\\Controller\\CorporationsController::index' => ['privates', '.service_locator.cJ7bGcQ', 'get_ServiceLocator_CJ7bGcQService', true],
            'App\\Controller\\CorporationsController::new' => ['privates', '.service_locator.cJ7bGcQ', 'get_ServiceLocator_CJ7bGcQService', true],
            'App\\Controller\\CorporationsController::show' => ['privates', '.service_locator.sQXkyLF', 'get_ServiceLocator_SQXkyLFService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\VilleController::delete' => ['privates', '.service_locator.ugHaBOk', 'get_ServiceLocator_UgHaBOkService', true],
            'App\\Controller\\VilleController::edit' => ['privates', '.service_locator.ugHaBOk', 'get_ServiceLocator_UgHaBOkService', true],
            'App\\Controller\\VilleController::index' => ['privates', '.service_locator.vqbRAJs', 'get_ServiceLocator_VqbRAJsService', true],
            'App\\Controller\\VilleController::new' => ['privates', '.service_locator.vqbRAJs', 'get_ServiceLocator_VqbRAJsService', true],
            'App\\Controller\\VilleController::show' => ['privates', '.service_locator.qzIfI5y', 'get_ServiceLocator_QzIfI5yService', true],
            'App\\Controller\\VilleController::villes' => ['privates', '.service_locator.vqbRAJs', 'get_ServiceLocator_VqbRAJsService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\ChickenController:delete' => ['privates', '.service_locator.zAdnTt1', 'get_ServiceLocator_ZAdnTt1Service', true],
            'App\\Controller\\ChickenController:edit' => ['privates', '.service_locator.zAdnTt1', 'get_ServiceLocator_ZAdnTt1Service', true],
            'App\\Controller\\ChickenController:index' => ['privates', '.service_locator.k9W2UrP', 'get_ServiceLocator_K9W2UrPService', true],
            'App\\Controller\\ChickenController:new' => ['privates', '.service_locator.k9W2UrP', 'get_ServiceLocator_K9W2UrPService', true],
            'App\\Controller\\ChickenController:show' => ['privates', '.service_locator.AhlX4P8', 'get_ServiceLocator_AhlX4P8Service', true],
            'App\\Controller\\CorporationsController:delete' => ['privates', '.service_locator.azozVe8', 'get_ServiceLocator_AzozVe8Service', true],
            'App\\Controller\\CorporationsController:edit' => ['privates', '.service_locator.azozVe8', 'get_ServiceLocator_AzozVe8Service', true],
            'App\\Controller\\CorporationsController:index' => ['privates', '.service_locator.cJ7bGcQ', 'get_ServiceLocator_CJ7bGcQService', true],
            'App\\Controller\\CorporationsController:new' => ['privates', '.service_locator.cJ7bGcQ', 'get_ServiceLocator_CJ7bGcQService', true],
            'App\\Controller\\CorporationsController:show' => ['privates', '.service_locator.sQXkyLF', 'get_ServiceLocator_SQXkyLFService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\VilleController:delete' => ['privates', '.service_locator.ugHaBOk', 'get_ServiceLocator_UgHaBOkService', true],
            'App\\Controller\\VilleController:edit' => ['privates', '.service_locator.ugHaBOk', 'get_ServiceLocator_UgHaBOkService', true],
            'App\\Controller\\VilleController:index' => ['privates', '.service_locator.vqbRAJs', 'get_ServiceLocator_VqbRAJsService', true],
            'App\\Controller\\VilleController:new' => ['privates', '.service_locator.vqbRAJs', 'get_ServiceLocator_VqbRAJsService', true],
            'App\\Controller\\VilleController:show' => ['privates', '.service_locator.qzIfI5y', 'get_ServiceLocator_QzIfI5yService', true],
            'App\\Controller\\VilleController:villes' => ['privates', '.service_locator.vqbRAJs', 'get_ServiceLocator_VqbRAJsService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\ChickenController::delete' => '?',
            'App\\Controller\\ChickenController::edit' => '?',
            'App\\Controller\\ChickenController::index' => '?',
            'App\\Controller\\ChickenController::new' => '?',
            'App\\Controller\\ChickenController::show' => '?',
            'App\\Controller\\CorporationsController::delete' => '?',
            'App\\Controller\\CorporationsController::edit' => '?',
            'App\\Controller\\CorporationsController::index' => '?',
            'App\\Controller\\CorporationsController::new' => '?',
            'App\\Controller\\CorporationsController::show' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\VilleController::delete' => '?',
            'App\\Controller\\VilleController::edit' => '?',
            'App\\Controller\\VilleController::index' => '?',
            'App\\Controller\\VilleController::new' => '?',
            'App\\Controller\\VilleController::show' => '?',
            'App\\Controller\\VilleController::villes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ChickenController:delete' => '?',
            'App\\Controller\\ChickenController:edit' => '?',
            'App\\Controller\\ChickenController:index' => '?',
            'App\\Controller\\ChickenController:new' => '?',
            'App\\Controller\\ChickenController:show' => '?',
            'App\\Controller\\CorporationsController:delete' => '?',
            'App\\Controller\\CorporationsController:edit' => '?',
            'App\\Controller\\CorporationsController:index' => '?',
            'App\\Controller\\CorporationsController:new' => '?',
            'App\\Controller\\CorporationsController:show' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\VilleController:delete' => '?',
            'App\\Controller\\VilleController:edit' => '?',
            'App\\Controller\\VilleController:index' => '?',
            'App\\Controller\\VilleController:new' => '?',
            'App\\Controller\\VilleController:show' => '?',
            'App\\Controller\\VilleController:villes' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
