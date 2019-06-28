<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility\PHP\Middleware;

class UserExistsMiddleware extends Middleware
{
    private $server;

    public function __construct(Server $server)
    {
        $this->server = $server;
    }

    public function check(string $email, string $password): bool
    {
        if (!$this->server->hasEmail($email)) {
            return false;
        }

        if (!$this->server->isValidPassword($email, $password)) {
            return false;
        }

        return parent::check($email, $password);
    }
}