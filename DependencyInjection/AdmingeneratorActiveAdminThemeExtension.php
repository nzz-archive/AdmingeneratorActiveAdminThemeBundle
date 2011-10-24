<?php

namespace Admingenerator\ActiveAdminThemeBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;


class AdmingeneratorActiveAdminThemeExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $container->setParameter('assetic.filter.compass.images_dir', $container->getParameter('kernel.root_dir').'/../web/bundles/admingeneratoractiveadmintheme/images');
        $container->setParameter('assetic.filter.compass.http_path', '/bundles/admingeneratoractiveadmintheme');
    }

    public function getAlias()
    {
        return 'admingenerator_active_admin_theme';
    }
}
