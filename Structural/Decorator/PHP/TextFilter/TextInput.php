<?php

namespace DesignPatterns\Structural\Decorator\PHP\TextFilter;

class TextInput implements InputFormat
{
    public function formatText(string $text): string
    {
        return $text;
    }
}