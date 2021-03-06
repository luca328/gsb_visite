<?php

namespace ContainerJpOxVhp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YKz_ME2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yKz.mE2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yKz.mE2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'visite' => ['privates', '.errored..service_locator.yKz.mE2.App\\Entity\\Visites', NULL, 'Cannot autowire service ".service_locator.yKz.mE2": it references class "App\\Entity\\Visites" but no such service exists.'],
        ], [
            'visite' => 'App\\Entity\\Visites',
        ]);
    }
}
