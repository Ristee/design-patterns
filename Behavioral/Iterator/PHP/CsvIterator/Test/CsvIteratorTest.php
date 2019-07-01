<?php

namespace DesignPatterns\Behavioral\Iterator\PHP\CsvIterator\Test;

use DesignPatterns\Behavioral\Iterator\PHP\CsvIterator\CsvIterator;
use PHPUnit\Framework\TestCase;

class CsvIteratorTest extends TestCase
{
    public function testCsvIterator()
    {
        $csv = new CsvIterator(__DIR__ . '/Fixture/cats.csv');

        foreach ($csv as $key => $row) {
            $this->assertEquals($this->providerResult($key), $row);
        }
    }

    private function providerResult($key)
    {
        $result = [
            1 => ['Name', 'Age'],
            2 => ['Steve', 3],
            3 => ['Siri', 2],
            4 => ['Fluffy', 5],
        ];

        return $result[$key] ?? false;
    }
}