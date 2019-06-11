<?php

namespace DesignPatterns\Creational\AbstractFactory\Php;

abstract class AbstractBookFactory
{
    abstract function makePHPBook();
    abstract function makeMySQLBook();
}