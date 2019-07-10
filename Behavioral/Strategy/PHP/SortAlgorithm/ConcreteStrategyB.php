<?php

namespace DesignPatterns\Behavioral\Strategy\PHP\SortAlgorithm;

class ConcreteStrategyB implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        rsort($data);

        return $data;
    }
}