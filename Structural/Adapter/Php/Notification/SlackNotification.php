<?php

namespace DesignPatterns\Structural\Adapter\Php\Notification;

class SlackNotification implements Notification
{
    private $slack;
    private $chatId;

    public function __construct(LegacySlackApi $slack, string $chatId)
    {
        $this->slack = $slack;
        $this->chatId = $chatId;
    }

    public function send(string $title, string $message)
    {
        $slackMessage = "#" . $title . "# " . strip_tags($message);
        $this->slack->logIn();

        return $this->slack->sendMessage($this->chatId, $slackMessage);
    }
}