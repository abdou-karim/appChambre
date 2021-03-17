<?php

namespace ContainerKsWPjPx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getORMAdapterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Omines\DataTablesBundle\Adapter\Doctrine\ORMAdapter' autowired service.
     *
     * @return \Omines\DataTablesBundle\Adapter\Doctrine\ORMAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/omines/datatables-bundle/src/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/omines/datatables-bundle/src/Adapter/AbstractAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/omines/datatables-bundle/src/Adapter/Doctrine/ORMAdapter.php';

        $container->factories['service_container']['Omines\\DataTablesBundle\\Adapter\\Doctrine\\ORMAdapter'] = function () use ($container) {
            return new \Omines\DataTablesBundle\Adapter\Doctrine\ORMAdapter(($container->services['doctrine'] ?? $container->getDoctrineService()));
        };

        return $container->factories['service_container']['Omines\\DataTablesBundle\\Adapter\\Doctrine\\ORMAdapter']();
    }
}