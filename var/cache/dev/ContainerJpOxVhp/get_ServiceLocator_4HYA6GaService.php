<?php

namespace ContainerJpOxVhp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4HYA6GaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4HYA6Ga' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4HYA6Ga'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'motif' => ['privates', '.errored..service_locator.4HYA6Ga.App\\Entity\\Motif', NULL, 'Cannot autowire service ".service_locator.4HYA6Ga": it references class "App\\Entity\\Motif" but no such service exists.'],
        ], [
            'motif' => 'App\\Entity\\Motif',
        ]);
    }
}
