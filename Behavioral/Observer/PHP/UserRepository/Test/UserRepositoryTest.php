<?php

namespace DesignPatterns\Behavioral\Observer\PHP\UserRepository\Test;

use DesignPatterns\Behavioral\Observer\PHP\UserRepository\Logger;
use DesignPatterns\Behavioral\Observer\PHP\UserRepository\UserRepository;
use PHPUnit\Framework\TestCase;

class UserRepositoryTest extends TestCase
{
    public function testObserver()
    {
        $logger = new Logger;

        $repository = new UserRepository;
        $repository->attach($logger, '*');

        $user = $repository->createUser([
            'name' => 'John Simth'
        ]);

        $repository->deleteUser($user);

        $this->assertEquals([
                'users:created',
                'users:deleted'
            ],
            $logger->getLogs()
        );
    }
}