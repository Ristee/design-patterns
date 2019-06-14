<?php

namespace DesignPatterns\Creational\FactoryMethod\Php\SocialNetworkPoster\Test;

use DesignPatterns\Creational\FactoryMethod\Php\SocialNetworkPoster\Facebook\FacebookPoster;
use DesignPatterns\Creational\FactoryMethod\Php\SocialNetworkPoster\LinkedIn\LinkedInPoster;
use PHPUnit\Framework\TestCase;

class SocialNetworkPosterTest extends TestCase
{
    public function testFacebook()
    {
        $network = new FacebookPoster('login', '1234');
        $this->assertEquals('Facebook content', $network->post("content"));
    }

    public function testLinkedIn()
    {
        $network = new LinkedInPoster('login', '1234');
        $this->assertEquals('LinkedIn content', $network->post("content"));
    }
}