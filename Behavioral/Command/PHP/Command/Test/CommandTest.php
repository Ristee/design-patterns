<?php

namespace DesignPatterns\Behavioral\Command\PHP\Command\Test;

use DesignPatterns\Behavioral\ChainOfResponsibility\Php\Middleware\RoleCheckMiddleware;
use DesignPatterns\Behavioral\ChainOfResponsibility\Php\Middleware\Server;
use DesignPatterns\Behavioral\ChainOfResponsibility\Php\Middleware\ThrottlingMiddleware;
use DesignPatterns\Behavioral\ChainOfResponsibility\Php\Middleware\UserExistsMiddleware;
use DesignPatterns\Behavioral\Command\PHP\Command\ComplexCommand;
use DesignPatterns\Behavioral\Command\PHP\Command\Invoker;
use DesignPatterns\Behavioral\Command\PHP\Command\Receiver;
use DesignPatterns\Behavioral\Command\PHP\Command\SimpleCommand;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testCommand()
    {
        $invoker = new Invoker;
        $invoker->setOnStart(new SimpleCommand("Say Hi!"));
        $invoker->setOnFinish(new ComplexCommand(new Receiver, "send", 'save'));

        $this->assertEquals(
            "Start: SimpleCommand: Say Hi! - Finish:ComplexCommand: Receiver: send - Receiver else: save",
            $invoker->doSomethingImportant()
        );
    }
}