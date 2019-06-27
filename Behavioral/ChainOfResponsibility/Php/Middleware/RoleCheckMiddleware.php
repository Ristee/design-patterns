<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility\Php\Middleware;

class RoleCheckMiddleware extends Middleware
{
    public function check(string $email, string $password): bool
    {
        if ($email === "admin@example.com") {
            return true;
        }

        return parent::check($email, $password);
    }
}