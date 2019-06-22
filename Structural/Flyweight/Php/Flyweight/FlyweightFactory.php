<?php

namespace DesignPatterns\Structural\Flyweight\Php\Flyweight;

class FlyweightFactory
{
    /**
     * @var Flyweight[]
     */
    private $flyweights = [];

    public function __construct(array $initialFlyweights)
    {
        foreach ($initialFlyweights as $state) {
            $this->flyweights[$this->getKey($state)] = new Flyweight($state);
        }
    }

    private function getKey(array $state): string
    {
        ksort($state);

        return implode("_", $state);
    }

    public function getFlyweight(array $sharedState): Flyweight
    {
        $key = $this->getKey($sharedState);

        if (!isset($this->flyweights[$key])) {
            $this->flyweights[$key] = new Flyweight($sharedState);
        }

        return $this->flyweights[$key];
    }

    public function listFlyweights()
    {
        $result = [];
        foreach ($this->flyweights as $key => $flyweight) {
            $result[] = $key;
        }

        return $result;
    }
}