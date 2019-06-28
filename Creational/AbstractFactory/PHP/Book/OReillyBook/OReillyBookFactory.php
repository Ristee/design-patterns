<?php

namespace DesignPatterns\Creational\AbstractFactory\PHP\Book\OReillyBook;

use DesignPatterns\Creational\AbstractFactory\PHP\Book\AbstractBookFactory;

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