<?php

namespace DesignPatterns\Creational\Builder\PHP\SQLQueryBuilder\Test;

use DesignPatterns\Creational\Builder\PHP\SQLQueryBuilder\MysqlQueryBuilder;
use DesignPatterns\Creational\Builder\PHP\SQLQueryBuilder\PostgresQueryBuilder;
use DesignPatterns\Creational\Builder\PHP\SQLQueryBuilder\SQLQueryBuilder;
use PHPUnit\Framework\TestCase;

class SQLQueryBuilderTest extends TestCase
{
    public function testMysqlQueryBuilder()
    {
        $query = $this->clientCode(new MysqlQueryBuilder);

        $this->assertEquals("SELECT name, email, password FROM users WHERE age > '18' AND age < '30' LIMIT 10, 20;", $query);
    }

    public function testPostgresQueryBuilder()
    {
        $query = $this->clientCode(new PostgresQueryBuilder());

        $this->assertEquals("SELECT name, email, password FROM users WHERE age > '18' AND age < '30' LIMIT 10 OFFSET 20;", $query);
    }

    /**
     * Note that the client code uses the builder object directly. A designated
     * Director class is not necessary in this case, because the client code needs
     * different queries almost every time, so the sequence of the construction
     * steps cannot be easily reused.
     *
     * Since all our query builders create products of the same type (which is a
     * string), we can interact with all builders using their common interface.
     * Later, if we implement a new Builder class, we will be able to pass its
     * instance to the existing client code without breaking it thanks to the
     * SQLQueryBuilder interface.
     *
     * @param SQLQueryBuilder $queryBuilder
     * @return string
     */
    function clientCode(SQLQueryBuilder $queryBuilder)
    {
        $query = $queryBuilder
            ->select("users", ["name", "email", "password"])
            ->where("age", 18, ">")
            ->where("age", 30, "<")
            ->limit(10, 20)
            ->getSQL();

        return $query;
    }
}