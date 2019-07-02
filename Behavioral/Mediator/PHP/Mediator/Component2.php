<?php

namespace DesignPatterns\Behavioral\Mediator\PHP\Mediator;

class Component2 extends BaseComponent
{
    public function doC()
    {
        $result = 'doC';
        $result .= " | ". $this->mediator->notify($this, "C");

        return $result;
    }

    public function doD()
    {
        $result = 'doD';
        $result .= " | ". $this->mediator->notify($this, "D");

        return $result;
    }
}