<?php

namespace DesignPatterns\Behavioral\State\PHP\State;

class ConcreteStateB extends State
{
    public function handle1(): string
    {
        return "ConcreteStateB handles request1.";
    }

    public function handle2(): string
    {
        $this->context->transitionTo(new ConcreteStateA);

        return "ConcreteStateB handles request2.";
    }
}