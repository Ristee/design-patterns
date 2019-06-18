<?php

namespace DesignPatterns\Creational\AbstractFactory\Php\Book;

abstract class AbstractBook
{
    abstract function getAuthor();
    abstract function getTitle();
}