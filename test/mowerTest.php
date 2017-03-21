<?php

include_once __DIR__.'/../src/mower.php';

class MowerTest extends PHPUnit_Framework_TestCase
{
    public function testMowerStart()
    {
        $mower = new Mower();
        $mower->start();
        $this->assertTrue($mower->running);
    }

    public function testMowerStop()
    {
        $mower = new Mower();
        $mower->stop();
        $this->assertFalse($mower->running);
    }

    public function testMowerStartStopRunning()
    {
        $mower = new Mower();
        $mower->start();
        $this->assertTrue($mower->isRunning());
        $mower->stop();
        $this->assertFalse($mower->isRunning());
    }
}
