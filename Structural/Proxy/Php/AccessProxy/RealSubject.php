<?php

namespace DesignPatterns\Structural\Proxy\Php\AccessProxy;

class RealSubject implements Subject
{
    public function request(): string
    {
        return "RealSubject: Handling request.";
    }
}