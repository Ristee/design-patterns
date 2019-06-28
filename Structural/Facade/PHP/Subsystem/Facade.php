<?php

namespace DesignPatterns\Structural\Facade\PHP\Subsystem;

class Facade
{
    protected $subsystem1;

    protected $subsystem2;

    public function __construct(
        Subsystem1 $subsystem1 = null,
        Subsystem2 $subsystem2 = null
    ) {
        $this->subsystem1 = $subsystem1 ?? new Subsystem1;
        $this->subsystem2 = $subsystem2 ?? new Subsystem2;
    }

    public function operation(): string
    {
        $result = $this->subsystem1->operation1();
        $result .= $this->subsystem2->operation1();
        $result .= $this->subsystem1->operationN();
        $result .= $this->subsystem2->operationZ();

        return $result;
    }
}