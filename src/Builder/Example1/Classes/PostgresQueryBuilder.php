<?php

namespace Src\Builder\Example1\Classes;

use Src\Builder\Example1\Interfaces\SQLQueryBuilder;

class PostgresQueryBuilder extends MysqlQueryBuilder
{
    public function limit(int $start, int $offset = 0): SQLQueryBuilder
    {
        parent::limit($start, $offset);
        
        $this->query->limit = " LIMIT $start OFFSET $offset";
        
        return $this;
    }
}