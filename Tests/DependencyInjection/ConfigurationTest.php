<?php

namespace EnricoStahn\Bundle\GuzzleStereoBundle\Tests\DependencyInjection;

use EnricoStahn\Bundle\GuzzleStereoBundle\DependencyInjection\Configuration;
use Symfony\Component\Config\Definition\Processor;

class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
    public function testProcessSimpleCase()
    {
        $configs = array(
            array(
                'log_dir' => '/foo/bar'
            )
        );
        $config = $this->process($configs);
        self::assertArrayHasKey('log_dir', $config);
        self::assertEquals('/foo/bar', $config['log_dir']);
    }

    /**
     * Processes an array of configurations and returns a compiled version.
     *
     * @param array $configs An array of raw configurations
     *
     * @return array A normalized array
     */
    protected function process($configs)
    {
        $processor = new Processor();
        return $processor->processConfiguration(new Configuration(), $configs);
    }
}
