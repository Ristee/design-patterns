<?php

namespace DesignPatterns\Behavioral\Memento\PHP\Memento;

class Originator
{
    private $state;

    public function __construct(string $state)
    {
        $this->state = $state;
    }

    public function doSomething(string $state): void
    {
        $this->state = $state;
    }

    public function save(): Memento
    {
        return new ConcreteMemento($this->state);
    }

    public function restore(Memento $memento): void
    {
        $this->state = $memento->getState();
    }
}