<?php

namespace DesignPatterns\Behavioral\Visitor\PHP\SalaryReport\Test;

use DesignPatterns\Behavioral\Visitor\PHP\SalaryReport\Company;
use DesignPatterns\Behavioral\Visitor\PHP\SalaryReport\Department;
use DesignPatterns\Behavioral\Visitor\PHP\SalaryReport\Employee;
use DesignPatterns\Behavioral\Visitor\PHP\SalaryReport\SalaryReport;
use PHPUnit\Framework\TestCase;

class SalaryReportTest extends TestCase
{
    public function testSalaryReport()
    {
        $mobileDev = new Department("Mobile Development", [
            new Employee("Ali Halabay", "programmer", 100000),
            new Employee("James Smith", "QA engineer", 30000),
        ]);

        $techSupport = new Department("Tech Support", [
            new Employee("Larry Ulbrecht", "supervisor", 70000),
            new Employee("Elton Pale", "operator", 30000),
        ]);

        $company = new Company("SuperStarDevelopment", [$mobileDev, $techSupport]);

        $report = new SalaryReport;

        $this->assertEquals(
            "$100,000 Ali Halabay (programmer)\n",
            (new Employee("Ali Halabay", "programmer", 100000))->accept($report)
        );

        $this->assertEquals(
            "Mobile Development ($130,000)\n\n   $100,000 Ali Halabay (programmer)\n   $30,000 James Smith (QA engineer)\n",
            $mobileDev->accept($report)
        );

        $this->assertEquals(
            "SuperStarDevelopment ($230,000)\n\n--Mobile Development ($130,000)\n\n   $100,000 Ali Halabay (programmer)\n   $30,000 James Smith (QA engineer)\n\n--Tech Support ($100,000)\n\n   $70,000 Larry Ulbrecht (supervisor)\n   $30,000 Elton Pale (operator)\n",
            $company->accept($report)
        );
    }
}