<?php

namespace DesignPatterns\Behavioral\Strategy\PHP\SortAlgorithm\Test;

use DesignPatterns\Behavioral\Strategy\PHP\SortAlgorithm\ConcreteStrategyA;
use DesignPatterns\Behavioral\Strategy\PHP\SortAlgorithm\ConcreteStrategyB;
use DesignPatterns\Behavioral\Strategy\PHP\SortAlgorithm\Context;
use PHPUnit\Framework\TestCase;

class SortAlgorithmTest extends TestCase
{
    public function testSortAlgorithm()
    {
        $context = new Context(new ConcreteStrategyA);
        $this->assertEquals(["a", "b", "c"], $context->doSomeBusinessLogic(["b", "a", "c"]));

        $context->setStrategy(new ConcreteStrategyB);
        $this->assertEquals(["c", "b", "a"], $context->doSomeBusinessLogic(["b", "a", "c"]));
    }
}