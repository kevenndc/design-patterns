<?php

namespace Src\Builder\Example1\Interfaces;

interface SQLQueryBuilder
{
    public function select(string $table, array $fields): SQLQueryBuilder;
    
    public function where(string $field, string $value, string $operator = '='): SQLQueryBuilder;
    
    public function limit(int $start, int $offset = 0): SQLQueryBuilder;
    
    public function getSQL(): string;
}