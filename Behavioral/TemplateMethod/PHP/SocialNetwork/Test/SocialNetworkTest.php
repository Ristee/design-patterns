<?php

namespace DesignPatterns\Behavioral\TemplateMethod\PHP\SocialNetwork\Test;

use DesignPatterns\Behavioral\TemplateMethod\PHP\SocialNetwork\Facebook;
use DesignPatterns\Behavioral\TemplateMethod\PHP\SocialNetwork\Twitter;
use PHPUnit\Framework\TestCase;

class SocialNetworkTest extends TestCase
{
    public function testSocialNetwork()
    {
        $username = 'test';
        $password = 'pass';
        $message = 'Hello!';

        $network = new Facebook($username, $password);
        $this->assertEquals("Facebook: 'test' has posted 'Hello!'", $network->post($message));

        $network = new Twitter($username, $password);
        $this->assertEquals("Twitter: 'test' has posted 'Hello!'", $network->post($message));
    }
}