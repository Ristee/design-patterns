<?php

namespace DesignPatterns\Structural\Facade\PHP\Subsystem;

class Subsystem2
{
    public function operation1(): string
    {
        return "Subsystem2: Get ready!\n";
    }

    public function operationZ(): string
    {
        return "Subsystem2: Fire!\n";
    }
}