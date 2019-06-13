<?php

namespace DesignPatterns\Creational\FactoryMethod\Php\SocialNetworkPoster\Facebook;

use DesignPatterns\Creational\FactoryMethod\Php\SocialNetworkPoster\SocialNetworkConnector;
use DesignPatterns\Creational\FactoryMethod\Php\SocialNetworkPoster\SocialNetworkPoster;

class FacebookPoster extends SocialNetworkPoster
{
    private $login;
    private $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}