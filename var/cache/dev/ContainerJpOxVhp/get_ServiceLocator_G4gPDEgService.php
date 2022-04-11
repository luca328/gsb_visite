<?php

namespace ContainerJpOxVhp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_G4gPDEgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.G4gPDEg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.G4gPDEg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'praticien' => ['privates', '.errored..service_locator.G4gPDEg.App\\Entity\\Praticien', NULL, 'Cannot autowire service ".service_locator.G4gPDEg": it references class "App\\Entity\\Praticien" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'praticien' => 'App\\Entity\\Praticien',
        ]);
    }
}