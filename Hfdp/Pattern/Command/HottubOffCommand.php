<?php

namespace Hfdp\Pattern\Command;

class HottubOffCommand implements CommandInterface
{
    /**
     * @var Hottub
     */
    private $hottub;

    /**
     * Constructor
     * @param Hottub $hottub
     */
    public function __construct(Hottub $hottub)
    {
        $this->hottub = $hottub;
    }

    /**
     * Execute command
     */
    public function execute()
    {
        $this->hottub->setTemperature(98);
        $this->hottub->off();
    }

    /**
     * Undo
     */
    public function undo()
    {
        $this->hottub->on();
    }
}
