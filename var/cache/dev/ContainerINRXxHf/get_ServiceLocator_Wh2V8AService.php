<?php

namespace ContainerINRXxHf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Wh2V8AService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wh2V8A_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wh2V8A_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'praticienRepository' => ['privates', 'App\\Repository\\PraticienRepository', 'getPraticienRepositoryService', true],
        ], [
            'praticienRepository' => 'App\\Repository\\PraticienRepository',
        ]);
    }
}
