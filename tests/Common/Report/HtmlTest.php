<?php
/**
 * HTML Report
 *
 * @copyright 2013 Anthon Pang
 * @license BSD-2-Clause
 */

namespace LeanPHP\Behat\CodeCoverage\Common\Report;

use VIPSoft\TestCase;
use LeanPHP\Behat\CodeCoverage\Common\Report\Factory;
use org\bovigo\vfs\vfsStream;
use SebastianBergmann\CodeCoverage\CodeCoverage;

/**
 * HTML report test
 *
 * @group Unit
 */
/**
 * TODO - reimplement integration tests'

class HtmlTest extends TestCase
{
    /**
     * TODO - reimplement integration tests'
     *

    public function testProcess()
    {
        vfsStream::setup('tmp');
        $target = vfsStream::url('tmp');

        file_put_contents($target . '/file', "test\n");

        $report = new \SebastianBergmann\CodeCoverage\Node\Directory($target);
        $report->addFile('file', array('class' => array(1 => 1)), array(), false);

        $coverage = $this->createMock('SebastianBergmann\CodeCoverage\CodeCoverage');
        $coverage->expects($this->once())
                 ->method('getReport')
                 ->will($this->returnValue($report));

        $report = new Html(array(
            'target' => $target,
        ));

        try {
            $result = $report->process($coverage);
        } catch (\Exception $e) {
            print_r($e->getMessage());
            $this->fail();
        }
    }
}*/
