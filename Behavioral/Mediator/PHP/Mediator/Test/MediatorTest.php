<?php

namespace DesignPatterns\Behavioral\Mediator\PHP\Mediator\Test;

use DesignPatterns\Behavioral\Mediator\PHP\Mediator\Component1;
use DesignPatterns\Behavioral\Mediator\PHP\Mediator\Component2;
use DesignPatterns\Behavioral\Mediator\PHP\Mediator\ConcreteMediator;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testMediator()
    {
        $c1 = new Component1;
        $c2 = new Component2;
        $mediator = new ConcreteMediator($c1, $c2);

        $this->assertEquals('doA | doC | ', $c1->doA());
        $this->assertEquals('doD | doB | doC | ', $c2->doD());
    }
}