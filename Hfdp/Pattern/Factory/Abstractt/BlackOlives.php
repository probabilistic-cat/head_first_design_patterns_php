<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class BlackOlives implements VeggiesInterface
{
    /**
     * Magic method
     * @return string
     */
    public function __toString(): string
    {
        return "Black Olives";
    }
}
