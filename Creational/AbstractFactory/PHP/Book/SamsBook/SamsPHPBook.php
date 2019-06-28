<?php

namespace DesignPatterns\Creational\AbstractFactory\PHP\Book\SamsBook;

use DesignPatterns\Creational\AbstractFactory\PHP\Book\AbstractPHPBook;

class SamsPHPBook extends AbstractPHPBook
{
    private $author;
    private $title;

    private static $oddOrEven = 'odd';

    public function __construct()
    {
        //alternate between 2 books
        if ('odd' == self::$oddOrEven) {
            $this->author = 'George Schlossnagle';
            $this->title = 'Advanced PHP Programming';
            self::$oddOrEven = 'even';
        } else {
            $this->author = 'Christian Wenz';
            $this->title = 'PHP Phrasebook';
            self::$oddOrEven = 'odd';
        }
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