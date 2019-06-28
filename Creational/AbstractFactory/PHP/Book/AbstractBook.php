<?php

namespace DesignPatterns\Creational\AbstractFactory\PHP\Book;

abstract class AbstractBook
{
    abstract function getAuthor();
    abstract function getTitle();
}