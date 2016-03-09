<?php

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