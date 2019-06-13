<?php

namespace DesignPatterns\Creational\FactoryMethod\Php\SocialNetworkPoster;

interface SocialNetworkConnector
{
    public function logIn(): void;

    public function logOut(): void;

    public function createPost($content): string;
}