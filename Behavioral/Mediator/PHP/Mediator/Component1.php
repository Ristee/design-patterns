<?php

namespace DesignPatterns\Behavioral\Mediator\PHP\Mediator;

class Component1 extends BaseComponent
{
    public function doA()
    {
        $result = 'doA';
        $result .= " | ". $this->mediator->notify($this, "A");

        return $result;
    }

    public function doB()
    {
        $result = 'doB';
        $result .= " | ". $this->mediator->notify($this, "B");

        return $result;
    }
}