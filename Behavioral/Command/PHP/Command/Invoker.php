<?php

namespace DesignPatterns\Behavioral\Command\PHP\Command;

class Invoker
{
    /**
     * @var Command
     */
    private $onStart;

    /**
     * @var Command
     */
    private $onFinish;

    public function setOnStart(Command $command): void
    {
        $this->onStart = $command;
    }

    public function setOnFinish(Command $command): void
    {
        $this->onFinish = $command;
    }

    public function doSomethingImportant(): string
    {
        $resultStart = '';
        $resultFinish = '';

        if ($this->onStart instanceof Command) {
            $resultStart = $this->onStart->execute();
        }

        if ($this->onFinish instanceof Command) {
            $resultFinish = $this->onFinish->execute();
        }

        return "Start: " . $resultStart . ' - Finish:' . $resultFinish;
    }
}