<?php

/*
 * This file is part of the guzzle-stereo-bundle package.
 *
 * (c) Enrico Stahn <enrico.stahn@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
