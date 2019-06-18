<?php

namespace DesignPatterns\Creational\AbstractFactory\Php\Book\Test;

use DesignPatterns\Creational\AbstractFactory\Php\Book\OReillyBook\OReillyBookFactory;
use DesignPatterns\Creational\AbstractFactory\Php\Book\SamsBook\SamsBookFactory;
use PHPUnit\Framework\TestCase;


class AbstractFactoryTest extends TestCase
{
    public function testOReillyBookFactory()
    {
        $bookFactoryInstance = new OReillyBookFactory;

        $phpBookOne = $bookFactoryInstance->makePHPBook();
        $this->assertEquals('Rasmus Lerdorf and Kevin Tatroe', $phpBookOne->getAuthor());
        $this->assertEquals('Programming PHP', $phpBookOne->getTitle());

        $phpBookTwo = $bookFactoryInstance->makePHPBook();
        $this->assertEquals('David Sklar and Adam Trachtenberg', $phpBookTwo->getAuthor());
        $this->assertEquals('PHP Cookbook', $phpBookTwo->getTitle());

        $mySqlBook = $bookFactoryInstance->makeMySQLBook();
        $this->assertEquals('George Reese, Randy Jay Yarger, and Tim King', $mySqlBook->getAuthor());
        $this->assertEquals('Managing and Using MySQL', $mySqlBook->getTitle());
    }

    public function testSamsBookFactory()
    {
        $bookFactoryInstance = new SamsBookFactory;

        $phpBookOne = $bookFactoryInstance->makePHPBook();
        $this->assertEquals('George Schlossnagle', $phpBookOne->getAuthor());
        $this->assertEquals('Advanced PHP Programming', $phpBookOne->getTitle());

        $phpBookTwo = $bookFactoryInstance->makePHPBook();
        $this->assertEquals('Christian Wenz', $phpBookTwo->getAuthor());
        $this->assertEquals('PHP Phrasebook', $phpBookTwo->getTitle());

        $mySqlBook = $bookFactoryInstance->makeMySQLBook();
        $this->assertEquals('Paul Dubois', $mySqlBook->getAuthor());
        $this->assertEquals('MySQL, 3rd Edition', $mySqlBook->getTitle());
    }
}