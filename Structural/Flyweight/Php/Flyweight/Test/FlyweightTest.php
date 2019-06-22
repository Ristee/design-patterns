<?php

namespace DesignPatterns\Structural\Flyweight\Php\Flyweight\Test;

use DesignPatterns\Structural\Flyweight\Php\Flyweight\FlyweightFactory;
use PHPUnit\Framework\TestCase;

class FlyweightTest extends TestCase
{
    public function testFlyweight()
    {
        $factory = new FlyweightFactory([
            ["Chevrolet", "Camaro2018", "pink"],
            ["Mercedes Benz", "C300", "black"],
            ["Mercedes Benz", "C500", "red"],
            ["BMW", "M5", "red"],
            ["BMW", "X6", "white"],
        ]);

        $this->assertEquals(5, count($factory->listFlyweights()));

        $flyweight1 = $factory->getFlyweight(['BMW', 'M5', 'red']);     // Get exist Flyweight
        $car1 = $flyweight1->operation(['CL234IR', 'James Doe']);

        $flyweight2 = $factory->getFlyweight(['BMW', 'X1', 'red']);     // Create new Flyweight
        $car2 = $flyweight2->operation(['CL234IR', 'James Doe']);

        $this->assertEquals('Flyweight: Displaying shared (["BMW","M5","red"]) and unique (["CL234IR","James Doe"]) state.', $car1);
        $this->assertEquals('Flyweight: Displaying shared (["BMW","X1","red"]) and unique (["CL234IR","James Doe"]) state.', $car2);

        $this->assertEquals(6, count($factory->listFlyweights()));
    }
}