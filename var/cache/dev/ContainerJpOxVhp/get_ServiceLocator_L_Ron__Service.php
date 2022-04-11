<?php

namespace ContainerJpOxVhp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_L_Ron__Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.L.ron..' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.L.ron..'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'visiteur' => ['privates', '.errored..service_locator.L.ron...App\\Entity\\Visiteur', NULL, 'Cannot autowire service ".service_locator.L.ron..": it references class "App\\Entity\\Visiteur" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'visiteur' => 'App\\Entity\\Visiteur',
        ]);
    }
}
