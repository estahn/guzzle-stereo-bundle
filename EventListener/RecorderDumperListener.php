<?php

/*
 * This file is part of the guzzle-stereo-bundle package.
 *
 * (c) Enrico Stahn <enrico.stahn@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EnricoStahn\Bundle\GuzzleStereoBundle\EventListener;

use Ikwattro\GuzzleStereo\Recorder;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;

class RecorderDumperListener
{
    /**
     * @var Recorder
     */
    protected $recorder;

    /**
     * RecorderDumperListener constructor.
     */
    public function __construct(Recorder $recorder)
    {
        $this->recorder = $recorder;
    }

    public function onKernelFinishRequest(FinishRequestEvent $event)
    {
        $this->recorder->dump();
    }
}
