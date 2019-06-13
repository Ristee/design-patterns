<?php

namespace DesignPatterns\Creational\FactoryMethod\Php\SocialNetworkPoster\Facebook;

use DesignPatterns\Creational\FactoryMethod\Php\SocialNetworkPoster\SocialNetworkConnector;

class FacebookConnector implements SocialNetworkConnector
{
    private $login;
    private $password;

    public function __construct(string $login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        // TODO implement logIn
    }

    public function logOut(): void
    {
        // TODO implement logOut
    }

    public function createPost($content): string
    {
        return "Facebook " . $content;
    }
}