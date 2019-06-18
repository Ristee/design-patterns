<?php

namespace DesignPatterns\Structural\Bridge\Php\PageRenderer\Page;

use DesignPatterns\Structural\Bridge\Php\PageRenderer\Renderer\Renderer;

abstract class AbstractPage
{
    /**
     * @var Renderer
     */
    protected $renderer;

    public function __construct(Renderer $renderer)
    {
        $this->renderer = $renderer;
    }

    public function changeRenderer(Renderer $renderer): void
    {
        $this->renderer = $renderer;
    }

    abstract public function view(): string;
}