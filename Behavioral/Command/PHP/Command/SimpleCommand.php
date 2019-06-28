<?php

namespace DesignPatterns\Behavioral\Command\PHP\Command;

class SimpleCommand implements Command
{
    private $payload;

    public function __construct(string $payload)
    {
        $this->payload = $payload;
    }

    public function execute(): string
    {
        return "SimpleCommand: ".$this->payload;
    }
}