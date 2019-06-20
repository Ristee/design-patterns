<?php

namespace DesignPatterns\Structural\Decorator\Php\TextFilter;

interface InputFormat
{
    public function formatText(string $text): string;
}