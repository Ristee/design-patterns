<?php

namespace DesignPatterns\Structural\Adapter\Php\Notification;

interface Notification
{
    public function send(string $title, string $message);
}