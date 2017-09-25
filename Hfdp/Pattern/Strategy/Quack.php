<?php

namespace Hfdp\Pattern\Strategy;

class Quack implements QuackBehaviorInterface
{
    public function quack()
    {
        echo "Quack<br />";
    }
}