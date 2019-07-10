<?php

namespace DesignPatterns\Behavioral\Strategy\PHP\SortAlgorithm;

class ConcreteStrategyA implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        sort($data);

        return $data;
    }
}