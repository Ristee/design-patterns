<?php

namespace DesignPatterns\Behavioral\Mediator\PHP\Mediator;

class ConcreteMediator implements Mediator
{
    private $component1;

    private $component2;

    public function __construct(Component1 $c1, Component2 $c2)
    {
        $this->component1 = $c1;
        $this->component1->setMediator($this);
        $this->component2 = $c2;
        $this->component2->setMediator($this);
    }

    public function notify(object $sender, string $event): string
    {
        $result = "";

        if ($event == "A") {
            $result .= $this->component2->doC();
        }

        if ($event == "D") {
            $result .= $this->component1->doB();
            $result .= $this->component2->doC();
        }

        return $result;
    }
}