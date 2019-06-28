<?php

namespace DesignPatterns\Behavioral\Command\PHP\Command;

class Receiver
{
    public function doSomething(string $a): string
    {
        return "Receiver: " . $a;
    }

    public function doSomethingElse(string $b): string
    {
        return "Receiver else: " . $b;
    }
}