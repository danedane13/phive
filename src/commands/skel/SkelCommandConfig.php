<?php
namespace PharIo\Phive;

use TheSeer\CLI;

class SkelCommandConfig {

    /**
     * @var CLI\CommandOptions
     */
    private $cliOptions;

    /**
     * @var string
     */
    private $workingDirectory = '';

    /**
     * @param CLI\CommandOptions $cliOptions
     * @param                    $workingDirectory
     */
    public function __construct(CLI\CommandOptions $cliOptions, $workingDirectory) {
        $this->cliOptions = $cliOptions;
        $this->workingDirectory = rtrim($workingDirectory, '/');

    }

    /**
     * @return bool
     */
    public function allowOverwrite() {
        return $this->cliOptions->isSwitch('force');
    }

    /**
     * @return string
     */
    public function getDestination() {
        return $this->workingDirectory . '/phive.xml';
    }

    /**
     * @return string
     */
    public function getTemplateFilename() {
        return __DIR__ . '/../../../conf/phive.skeleton.xml';
    }
}



