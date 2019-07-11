<?php

namespace DesignPatterns\Behavioral\TemplateMethod\PHP\SocialNetwork;

abstract class SocialNetwork
{
    protected $username;
    protected $password;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function post(string $message): string
    {
        if ($this->logIn($this->username, $this->password)) {
            $result = $this->sendData($message);
            $this->logOut();

            return $result;
        }

        return false;
    }

    abstract public function logIn(string $userName, string $password): bool;

    abstract public function sendData(string $message): string;

    abstract public function logOut(): void;
}