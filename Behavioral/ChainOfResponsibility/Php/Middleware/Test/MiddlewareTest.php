<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility\Php\Test;

use DesignPatterns\Behavioral\ChainOfResponsibility\Php\Middleware\RoleCheckMiddleware;
use DesignPatterns\Behavioral\ChainOfResponsibility\Php\Middleware\Server;
use DesignPatterns\Behavioral\ChainOfResponsibility\Php\Middleware\ThrottlingMiddleware;
use DesignPatterns\Behavioral\ChainOfResponsibility\Php\Middleware\UserExistsMiddleware;
use PHPUnit\Framework\TestCase;

class MiddlewareTest extends TestCase
{
    public function testMiddleware()
    {
        $server = new Server();
        $server->register("admin@example.com", "admin_pass");
        $server->register("user@example.com", "user_pass");

        $middleware = new ThrottlingMiddleware(2);
        $middleware
            ->linkWith(new UserExistsMiddleware($server))
            ->linkWith(new RoleCheckMiddleware);

        $server->setMiddleware($middleware);

        $this->assertFalse($server->logIn('not-exsist@exapmle.com', '123'));   // UserExistsMiddleware
        $this->assertFalse($server->logIn('admin@example.com', 'wrong'));      // UserExistsMiddleware
        $this->assertTrue($server->logIn('admin@example.com', 'admin_pass'));  // RoleCheckMiddleware
        $this->assertTrue($server->logIn('user@example.com', 'user_pass'));    // RoleCheckMiddleware
        $this->assertFalse($server->logIn('admin@example.com', 'admin_pass')); // ThrottlingMiddleware
    }
}