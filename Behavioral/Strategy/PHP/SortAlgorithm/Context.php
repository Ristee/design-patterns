<?php

namespace DesignPatterns\Behavioral\Strategy\PHP\SortAlgorithm;

class Context
{
    /**
     * @var Strategy
     */
    private $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function doSomeBusinessLogic(array $params): array
    {
        return $this->strategy->doAlgorithm($params);
    }
}