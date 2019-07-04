<?php

namespace DesignPatterns\Behavioral\Memento\PHP\Memento\Test;

use DesignPatterns\Behavioral\Memento\PHP\Memento\Caretaker;
use DesignPatterns\Behavioral\Memento\PHP\Memento\Originator;
use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{
    public function testMemento()
    {
        $originator = new Originator("init");
        $caretaker = new Caretaker($originator);

        $caretaker->backup();
        $originator->doSomething("step1");

        $caretaker->backup();
        $originator->doSomething("step2");

        $caretaker->backup();
        $originator->doSomething("step3");

        $this->assertEquals("(init...)\n(step1...)\n(step2...)\n", $caretaker->showHistory());

        $memento = $caretaker->undo();
        $this->assertEquals("step2", $memento->getState());
        $this->assertEquals("(init...)\n(step1...)\n", $caretaker->showHistory());

        $memento = $caretaker->undo();
        $this->assertEquals("step1", $memento->getState());
        $this->assertEquals("(init...)\n", $caretaker->showHistory());

        $memento = $caretaker->undo();
        $this->assertEquals("init", $memento->getState());
        $this->assertEquals("", $caretaker->showHistory());
    }
}