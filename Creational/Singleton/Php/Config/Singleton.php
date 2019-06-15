<?php

namespace DesignPatterns\Creational\Singleton\Php\Config;

class Singleton
{
    private static $instances = [];

    protected function __construct() { }

    protected function __clone() { }

    protected function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }

    /**
     * @return $this
     */
    public static function getInstance()
    {
        $subclass = static::class;
        if (!isset(self::$instances[$subclass])) {
            self::$instances[$subclass] = new static;
        }

        return self::$instances[$subclass];
    }
}