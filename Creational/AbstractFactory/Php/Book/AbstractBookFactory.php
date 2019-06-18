<?php

namespace DesignPatterns\Creational\AbstractFactory\Php\Book;

abstract class AbstractBookFactory
{
    abstract function makePHPBook();
    abstract function makeMySQLBook();
}