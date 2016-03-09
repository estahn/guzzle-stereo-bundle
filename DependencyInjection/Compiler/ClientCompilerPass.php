<?php

namespace EnricoStahn\Bundle\GuzzleStereoBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class ClientCompilerPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        if ($container->hasDefinition('guzzle.handler')) {
            $container
                ->getDefinition('guzzle.handler')
                ->addMethodCall('push', [new Reference('guzzle_stereo_bundle.middleware.recorder')]);
        }
    }
}