<?php

namespace Hfdp\Pattern\Combining;

class CountingDuckFactory extends AbstractDuckFactory
{
    /**
     * Create mallard duck
     * @return QuackableInterface
     */
    public function createMallardDuck()
    {
        return new QuackCounter(new MallardDuck());
    }

    /**
     * Create redhead duck
     * @return QuackableInterface
     */
    public function createRedheadDuck()
    {
        return new QuackCounter(new RedheadDuck());
    }

    /**
     * Create duck call
     * @return QuackableInterface
     */
    public function createDuckCall()
    {
        return new QuackCounter(new DuckCall());
    }

    /**
     * Create rubber duck
     * @return QuackableInterface
     */
    public function createRubberDuck()
    {
        return new QuackCounter(new RubberDuck());
    }
}
