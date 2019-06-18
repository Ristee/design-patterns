<?php

namespace DesignPatterns\Creational\AbstractFactory\Php;

abstract class AbstractBook
{
    abstract function getAuthor();
    abstract function getTitle();
}