<?php

namespace DesignPatterns\Behavioral\Memento\PHP\Memento;

interface Memento
{
    public function getState(): string;

    public function getName(): string;

    public function getDate(): string;
}