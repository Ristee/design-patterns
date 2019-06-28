<?php

namespace DesignPatterns\Behavioral\Command\PHP\Command;

class ComplexCommand implements Command
{
    /**
     * @var Receiver
     */
    private $receiver;

    private $a;

    private $b;

    public function __construct(Receiver $receiver, string $a, string $b)
    {
        $this->receiver = $receiver;
        $this->a = $a;
        $this->b = $b;
    }

    public function execute(): string
    {
        $a = $this->receiver->doSomething($this->a);
        $b = $this->receiver->doSomethingElse($this->b);

        return "ComplexCommand: " . $a . " - " . $b;
    }
}