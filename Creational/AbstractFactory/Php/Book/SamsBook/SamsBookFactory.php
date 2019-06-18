<?php

namespace DesignPatterns\Creational\AbstractFactory\Php\Book\SamsBook;

use DesignPatterns\Creational\AbstractFactory\Php\Book\AbstractBookFactory;

class SamsBookFactory extends AbstractBookFactory
{
    private $context = "Sams";

    public function makePHPBook()
    {
        return new SamsPHPBook;
    }

    public function makeMySQLBook()
    {
        return new SamsMySQLBook;
    }
}