<?php
namespace PharIo\Phive;

/**
 * @covers PharIo\Phive\UpdateCommand
 */
class UpdateCommandTest extends \PHPUnit_Framework_TestCase {

    public function testInvokesPharService() {

        $config = $this->getCommandConfigMock();
        $pharService = $this->getPharServiceMock();

        $requestedPhar1 = $this->getRequestedPharMock();
        $requestedPhar2 = $this->getRequestedPharMock();

        $installedPhar1 = $this->getInstalledPharMock();
        $installedPhar2 = $this->getInstalledPharMock();

        $filename = new Filename('/tmp/foo');

        $phiveXmlConfig = $this->getPhiveXmlConfigMock();
        $phiveXmlConfig->method('hasPharLocation')->willReturn(true);
        $phiveXmlConfig->method('getPharLocation')->willReturn($filename);

        $directory = $this->getDirectoryMock();

        $config->expects($this->any())
            ->method('getTargetDirectory')
            ->willReturn($directory);

        $config->expects($this->once())
            ->method('getRequestedPhars')
            ->will($this->returnValue([$requestedPhar1, $requestedPhar2]));

        $command = new UpdateCommand($config, $pharService, $phiveXmlConfig);

        $pharService->expects($this->at(0))
            ->method('update')
            ->with($requestedPhar1, $filename)
            ->willReturn($installedPhar1);

        $pharService->expects($this->at(1))
            ->method('update')
            ->with($requestedPhar2, $filename)
            ->willReturn($installedPhar2);

        $command->execute();

    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|Directory
     */
    private function getDirectoryMock() {
        return $this->createMock(Directory::class);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|UpdateCommandConfig
     */
    private function getCommandConfigMock() {
        return $this->createMock(UpdateCommandConfig::class);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|PharService
     */
    private function getPharServiceMock() {
        return $this->createMock(PharService::class);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|RequestedPhar
     */
    private function getRequestedPharMock() {
        return $this->createMock(RequestedPhar::class);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|PhiveXmlConfig
     */
    private function getPhiveXmlConfigMock() {
        return $this->createMock(PhiveXmlConfig::class);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|InstalledPhar
     */
    private function getInstalledPharMock() {
        return $this->createMock(InstalledPhar::class);
    }
}




