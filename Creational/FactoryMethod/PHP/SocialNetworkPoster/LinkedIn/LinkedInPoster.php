<?php

namespace DesignPatterns\Creational\FactoryMethod\PHP\SocialNetworkPoster\LinkedIn;

use DesignPatterns\Creational\FactoryMethod\Php\SocialNetworkPoster\SocialNetworkConnector;
use DesignPatterns\Creational\FactoryMethod\Php\SocialNetworkPoster\SocialNetworkPoster;

class LinkedInPoster extends SocialNetworkPoster
{
    private $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->email, $this->password);
    }
}