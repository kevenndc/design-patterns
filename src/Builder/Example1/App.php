<?php

namespace Src\Builder\Example1;

use Src\Builder\Example1\Classes\MysqlQueryBuilder;
use Src\Builder\Example1\Classes\PostgresQueryBuilder;
use Src\Builder\Example1\Interfaces\SQLQueryBuilder;

class App
{
    public function __construct()
    {
        $this->showQueries(new MysqlQueryBuilder());
        $this->showQueries(new PostgresQueryBuilder());
    }
    
    public function showQueries(SQLQueryBuilder $queryBuilder): void
    {
        $query = $queryBuilder
            ->select('users', ['name', 'email', 'password'])
            ->where('age', 18, '>')
            ->where('age', 30, '<')
            ->limit(10)
            ->getSQL();
        
        echo $query;
        echo '<br>';
    }
}