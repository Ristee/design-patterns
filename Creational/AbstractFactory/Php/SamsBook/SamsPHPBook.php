<?php

namespace DesignPatterns\Creational\AbstractFactory\Php\SamsBook;

use DesignPatterns\Creational\AbstractFactory\Php\AbstractPHPBook;

class SamsPHPBook extends AbstractPHPBook
{
    private $author;
    private $title;

    private static $oddOrEven = 'odd';

    public function __construct()
    {
        //alternate randomly between 2 books
        mt_srand((double)microtime() * 10000000);
        $rand_num = mt_rand(0, 1);

        if (1 > $rand_num) {
            $this->author = 'George Schlossnagle';
            $this->title = 'Advanced PHP Programming';
        } else {
            $this->author = 'Christian Wenz';
            $this->title = 'PHP Phrasebook';
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