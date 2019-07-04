<?php

namespace DesignPatterns\Behavioral\Memento\PHP\Memento;

class Caretaker
{
    /**
     * @var Memento[]
     */
    private $mementos = [];

    /**
     * @var Originator
     */
    private $originator;

    public function __construct(Originator $originator)
    {
        $this->originator = $originator;
    }

    public function backup(): void
    {
        $this->mementos[] = $this->originator->save();
    }

    public function undo(): Memento
    {
        if (!count($this->mementos)) {
            throw new \Exception("Not found Memento");
        }
        $memento = array_pop($this->mementos);

        try {
            $this->originator->restore($memento);
        } catch (\Exception $e) {
            $this->undo();
        }

        return $memento;
    }

    public function showHistory()
    {
        $result = "";
        foreach ($this->mementos as $memento) {
            $result .= $memento->getName() . "\n";
        }

        return $result;
    }
}