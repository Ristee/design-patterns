<?php

namespace DesignPatterns\Creational\FactoryMethod\Php\SocialNetworkPoster;

abstract class SocialNetworkPoster
{
    abstract public function  getSocialNetwork(): SocialNetworkConnector;

    public function post($content): string
    {
        $network = $this->getSocialNetwork();
        $network->logIn();
        $result = $network->createPost($content);
        $network->logOut();

        return $result;
    }
}