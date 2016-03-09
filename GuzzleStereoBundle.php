<?php

namespace EnricoStahn\Bundle\GuzzleStereoBundle;

use EnricoStahn\Bundle\GuzzleStereoBundle\DependencyInjection\Compiler\ClientCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class GuzzleStereoBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new ClientCompilerPass());
    }
}
