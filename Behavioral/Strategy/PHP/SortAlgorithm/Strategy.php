<?php

namespace DesignPatterns\Behavioral\Strategy\PHP\SortAlgorithm;

interface Strategy
{
    public function doAlgorithm(array $data): array;
}