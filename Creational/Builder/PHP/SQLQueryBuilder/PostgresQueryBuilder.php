<?php

namespace DesignPatterns\Creational\Builder\PHP\SQLQueryBuilder;

class PostgresQueryBuilder extends MysqlQueryBuilder
{
    public function limit(int $start, int $offset): SQLQueryBuilder
    {
        parent::limit($start, $offset);

        $this->query->limit = " LIMIT ". $start . " OFFSET " . $offset;

        return $this;
    }

    // + tons of other overrides...
}