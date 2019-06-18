<?php

namespace DesignPatterns\Creational\AbstractFactory\Php\OReillyBook;

use DesignPatterns\Creational\AbstractFactory\Php\AbstractBookFactory;

class OReillyBookFactory extends AbstractBookFactory
{
    private $context = "OReilly";

    public function makePHPBook()
    {
        return new OReillyPHPBook;
    }

    public function makeMySQLBook()
    {
        return new OReillyMySQLBook;
    }
}