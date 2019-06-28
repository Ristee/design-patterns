<?php

namespace DesignPatterns\Structural\Adapter\PHP\Notification\Test;

use DesignPatterns\Structural\Adapter\Php\Notification\LegacySlackApi;
use DesignPatterns\Structural\Adapter\Php\Notification\SlackNotification;
use PHPUnit\Framework\TestCase;

class NotificationTest extends TestCase
{
    public function testNotification()
    {
        $chatId = "Dev";
        $slackApi = new LegacySlackApi("example.com", "XXXXXX");
        $notification = new SlackNotification($slackApi, $chatId);

        $this->assertEquals(
            "Posted following message into the 'Dev' chat: 'message'.\n",
            $slackApi->sendMessage($chatId, 'message')
        );

        $this->assertEquals(
            "Posted following message into the 'Dev' chat: '#Title# message'.\n",
            $notification->send('Title', 'message')
        );
    }
}