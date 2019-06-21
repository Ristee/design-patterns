<?php

namespace DesignPatterns\Structural\Facade\Php\Subsystem;

class Subsystem1
{
    public function operation1(): string
    {
        return "Subsystem1: Ready!\n";
    }

    public function operationN(): string
    {
        return "Subsystem1: Go!\n";
    }
}