<?php

namespace DesignPatterns\Structural\Decorator\Php\TextFilter;

class TextInput implements InputFormat
{
    public function formatText(string $text): string
    {
        return $text;
    }
}