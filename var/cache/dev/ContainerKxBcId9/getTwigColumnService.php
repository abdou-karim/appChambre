<?php

namespace ContainerKxBcId9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwigColumnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Omines\DataTablesBundle\Column\TwigColumn' autowired service.
     *
     * @return \Omines\DataTablesBundle\Column\TwigColumn
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/omines/datatables-bundle/src/Column/AbstractColumn.php';
        include_once \dirname(__DIR__, 4).'/vendor/omines/datatables-bundle/src/Column/TwigColumn.php';

        $container->factories['service_container']['Omines\\DataTablesBundle\\Column\\TwigColumn'] = function () use ($container) {
            return new \Omines\DataTablesBundle\Column\TwigColumn(($container->services['twig'] ?? $container->getTwigService()));
        };

        return $container->factories['service_container']['Omines\\DataTablesBundle\\Column\\TwigColumn']();
    }
}
