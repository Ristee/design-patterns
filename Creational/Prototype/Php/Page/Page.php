<?php

namespace DesignPatterns\Creational\Prototype\Php\Page;

class Page
{
    public $title;

    public $body;

    /**
     * @var Author
     */
    public $author;

    public $comments = [];

    /**
     * @var \DateTime
     */
    public $date;

    public function __construct(string $title, string $body, Author $author)
    {
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;
        $this->author->addToPage($this);
        $this->date = new \DateTime;
    }

    public function addComment(string $comment): void
    {
        $this->comments[] = $comment;
    }

    public function __clone()
    {
        $this->title = "Copy of " . $this->title;
        $this->author->addToPage($this);
        $this->comments = [];
        $this->date = new \DateTime;
    }
}