<?php

namespace EnricoStahn\Bundle\GuzzleStereoBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('guzzle_stereo');

        $rootNode
            ->children()
                ->scalarNode('log_dir')->defaultValue('%kernel.logs_dir%/guzzle_stereo/')->end()
            ->end();

        return $treeBuilder;
    }
}
