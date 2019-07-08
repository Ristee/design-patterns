<?php

namespace DesignPatterns\Behavioral\State\PHP\State;

abstract class State
{
    /**
     * @var Context
     */
    protected $context;

    public function setContext(Context $context)
    {
        $this->context = $context;
    }

    abstract public function handle1(): string;

    abstract public function handle2(): string;
}