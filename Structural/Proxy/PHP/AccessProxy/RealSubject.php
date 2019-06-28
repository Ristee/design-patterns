<?php

namespace DesignPatterns\Structural\Proxy\PHP\AccessProxy;

class RealSubject implements Subject
{
    public function request(): string
    {
        return "RealSubject: Handling request.";
    }
}