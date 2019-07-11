<?php

namespace DesignPatterns\Behavioral\TemplateMethod\PHP\SocialNetwork;

class Facebook extends SocialNetwork
{
    public function logIn(string $userName, string $password): bool
    {
        return true;
    }

    public function sendData(string $message): string
    {
        return "Facebook: '" . $this->username . "' has posted '" . $message . "'";
    }

    public function logOut(): void
    {

    }
}