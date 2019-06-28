<?php

namespace DesignPatterns\Creational\Singleton\PHP\Config\Test;

use DesignPatterns\Creational\Singleton\Php\Config\Config;
use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
    public function testConfig()
    {
        $config = Config::getInstance();
        $config->setValue("login", 'test_login');
        $config->setValue("password", 'test_password');

        $configCheck = Config::getInstance();

        $this->assertEquals($config->getValue('login'), $configCheck->getValue('login'));
        $this->assertEquals($config->getValue('password'), $configCheck->getValue('password'));
        $this->assertEquals($config, $configCheck);
    }
}