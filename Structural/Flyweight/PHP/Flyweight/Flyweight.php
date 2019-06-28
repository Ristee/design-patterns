<?php

namespace DesignPatterns\Structural\Flyweight\PHP\Flyweight;

class Flyweight
{
    private $sharedState;

    public function __construct($sharedState)
    {
        $this->sharedState = $sharedState;
    }

    public function operation($uniqueState)
    {
        $s = json_encode($this->sharedState);
        $u = json_encode($uniqueState);

        return "Flyweight: Displaying shared ($s) and unique ($u) state.";
    }
}