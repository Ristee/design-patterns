<?php

namespace DesignPatterns\Behavioral\Visitor\PHP\SalaryReport;

interface Entity
{
    public function accept(Visitor $visitor): string;
}