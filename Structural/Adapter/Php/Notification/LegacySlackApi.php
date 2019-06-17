<?php

namespace DesignPatterns\Structural\Adapter\Php\Notification;

class LegacySlackApi
{
    private $login;
    private $apiKey;

    public function __construct(string $login, string $apiKey)
    {
        $this->login = $login;
        $this->apiKey = $apiKey;
    }

    public function logIn()
    {
        return 'LogIn';
    }

    public function sendMessage(string $chatId, string $message)
    {
        return "Posted following message into the '$chatId' chat: '$message'.\n";
    }
}