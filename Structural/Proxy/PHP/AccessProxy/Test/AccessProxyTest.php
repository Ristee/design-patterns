<?php

namespace DesignPatterns\Structural\Proxy\PHP\AccessProxy\Test;

use DesignPatterns\Structural\Proxy\Php\AccessProxy\Proxy;
use DesignPatterns\Structural\Proxy\Php\AccessProxy\RealSubject;
use PHPUnit\Framework\TestCase;

class AccessProxyTest extends TestCase
{
    public function testAccessProxy()
    {
        $realSubject = new RealSubject;
        $proxy = new Proxy($realSubject);

        $this->assertEquals('RealSubject: Handling request.', $realSubject->request());
        $this->assertEquals('Permission denied', $proxy->request());
    }
}