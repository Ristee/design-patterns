<?php

namespace DesignPatterns\Structural\Facade\Php\Subsystem\Test;

use DesignPatterns\Structural\Decorator\Php\TextFilter\Decorator\DangerousHTMLTagsFilter;
use DesignPatterns\Structural\Decorator\Php\TextFilter\Decorator\MarkdownFormat;
use DesignPatterns\Structural\Decorator\Php\TextFilter\Decorator\PlainTextFilter;
use DesignPatterns\Structural\Decorator\Php\TextFilter\TextInput;
use DesignPatterns\Structural\Facade\Php\Subsystem\Facade;
use PHPUnit\Framework\TestCase;

class SubsystemTest extends TestCase
{
    public function testSubsystem()
    {
        $facade = new Facade();
        $expected = "Subsystem1: Ready!\nSubsystem2: Get ready!\nSubsystem1: Go!\nSubsystem2: Fire!\n";

        $this->assertEquals($expected, $facade->operation());
    }
}