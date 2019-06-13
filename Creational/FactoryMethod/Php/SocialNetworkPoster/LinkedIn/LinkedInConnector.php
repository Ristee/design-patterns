<?php

namespace DesignPatterns\Creational\FactoryMethod\Php\SocialNetworkPoster\LinkedIn;

use DesignPatterns\Creational\FactoryMethod\Php\SocialNetworkPoster\SocialNetworkConnector;

class LinkedInConnector implements SocialNetworkConnector
{
    private $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
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
        return "LinkedIn " . $content;
    }
}