<?php

namespace DesignPatterns\Behavioral\State\PHP\State\Test;

use DesignPatterns\Behavioral\State\PHP\State\ConcreteStateA;
use DesignPatterns\Behavioral\State\PHP\State\Context;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testState()
    {
        $context = new Context(new ConcreteStateA());

        $this->assertEquals("ConcreteStateA handles request1.", $context->request1());
        $this->assertEquals("ConcreteStateB handles request2.", $context->request2());
    }
}