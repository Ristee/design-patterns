<?php

namespace DesignPatterns\Behavioral\Visitor\PHP\SalaryReport;

interface Visitor
{
    public function visitCompany(Company $company): string;

    public function visitDepartment(Department $department): string;

    public function visitEmployee(Employee $employee): string;
}