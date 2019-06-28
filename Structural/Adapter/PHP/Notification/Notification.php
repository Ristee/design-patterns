<?php

namespace DesignPatterns\Structural\Adapter\PHP\Notification;

interface Notification
{
    public function send(string $title, string $message);
}