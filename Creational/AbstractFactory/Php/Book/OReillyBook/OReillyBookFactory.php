<?php

namespace DesignPatterns\Creational\AbstractFactory\Php\Book\OReillyBook;

use DesignPatterns\Creational\AbstractFactory\Php\Book\AbstractBookFactory;

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