<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility\PHP\Middleware;

class Server
{
    private $users = [];

    /**
     * @var Middleware
     */
    private $middleware;

    public function setMiddleware(Middleware $middleware): void
    {
        $this->middleware = $middleware;
    }

    public function logIn(string $email, string $password): bool
    {
        if ($this->middleware->check($email, $password)) {
            return true;
        }

        return false;
    }

    public function register(string $email, string $password): void
    {
        $this->users[$email] = $password;
    }

    public function hasEmail(string $email): bool
    {
        return isset($this->users[$email]);
    }

    public function isValidPassword(string $email, string $password): bool
    {
        return $this->users[$email] === $password;
    }
}
