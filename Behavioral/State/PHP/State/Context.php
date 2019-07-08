<?php

namespace DesignPatterns\Behavioral\State\PHP\State;

class Context
{
    /**
     * @var State
     */
    private $state;

    public function __construct(State $state)
    {
        $this->transitionTo($state);
    }

    public function transitionTo(State $state): void
    {
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function request1(): string
    {
        return $this->state->handle1();
    }

    public function request2(): string
    {
        return $this->state->handle2();
    }
}