<?php

namespace DesignPatterns\Creational\AbstractFactory\PHP\Book;

abstract class AbstractBookFactory
{
    abstract function makePHPBook();
    abstract function makeMySQLBook();
}