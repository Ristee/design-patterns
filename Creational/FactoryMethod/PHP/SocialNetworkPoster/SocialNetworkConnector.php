<?php

namespace DesignPatterns\Creational\FactoryMethod\PHP\SocialNetworkPoster;

interface SocialNetworkConnector
{
    public function logIn(): void;

    public function logOut(): void;

    public function createPost($content): string;
}