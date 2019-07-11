<?php

namespace DesignPatterns\Behavioral\TemplateMethod\PHP\SocialNetwork;

class Twitter extends SocialNetwork
{
    public function logIn(string $userName, string $password): bool
    {
        return true;
    }

    public function sendData(string $message): string
    {
        return "Twitter: '" . $this->username . "' has posted '" . $message . "'";
    }

    public function logOut(): void
    {

    }
}