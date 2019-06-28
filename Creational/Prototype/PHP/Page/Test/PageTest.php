<?php

namespace DesignPatterns\Creational\Prototype\PHP\Page\Test;

use DesignPatterns\Creational\Prototype\Php\Page\Author;
use DesignPatterns\Creational\Prototype\Php\Page\Page;
use PHPUnit\Framework\TestCase;

class PageTest extends TestCase
{
    public function testPage()
    {
        $author = new Author("John Smith");
        $page = new Page("Page 1", "Content 1", $author);
        $page->addComment("Nice tip, thanks!");

        $draft = clone $page;

        $this->assertNotEquals($page->title, $draft->title);
        $this->assertNotEquals($page->comments, $draft->comments);

        $this->assertEquals($page->body, $draft->body);
        $this->assertEquals($page->author, $draft->author);
    }
}