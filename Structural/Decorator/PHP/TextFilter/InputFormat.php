<?php

namespace DesignPatterns\Structural\Decorator\PHP\TextFilter;

interface InputFormat
{
    public function formatText(string $text): string;
}