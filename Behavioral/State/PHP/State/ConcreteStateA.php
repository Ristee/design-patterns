<?php

namespace DesignPatterns\Behavioral\State\PHP\State;

class ConcreteStateA extends State
{
    public function handle1(): string
    {
        $this->context->transitionTo(new ConcreteStateB);

        return "ConcreteStateA handles request1.";
    }

    public function handle2(): string
    {
        return "ConcreteStateA handles request2.";
    }
}