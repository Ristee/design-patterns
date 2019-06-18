<?php

namespace DesignPatterns\Creational\AbstractFactory\Php\Book\SamsBook;

use DesignPatterns\Creational\AbstractFactory\Php\Book\AbstractMySQLBook;

class SamsMySQLBook extends AbstractMySQLBook
{
    private $author;
    private $title;

    public function __construct()
    {
        $this->author = 'Paul Dubois';
        $this->title = 'MySQL, 3rd Edition';
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }
}