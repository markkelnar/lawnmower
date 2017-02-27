<?php
/**
 * This class is specific to the mower behavior and engine functionality.
 */

class Mower
{
    public $running;

    /**
     * Run this function to set the engine to a running state.
     */
    public function start()
    {
        $this->running = true;
    }

    /**
     * Run this function to stop the engine.
     */
    public function stop()
    {
        $this->running = false;
    }

    /**
     * @return boolean  State of the engine running.
     */
    public function isRunning()
    {
        return $this->running;
    }
}
