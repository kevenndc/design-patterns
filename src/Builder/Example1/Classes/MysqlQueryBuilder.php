<?php

namespace Src\Builder\Example1\Classes;

use Exception;
use Src\Builder\Example1\Interfaces\SQLQueryBuilder;
use stdClass;

class MysqlQueryBuilder implements SQLQueryBuilder
{
    protected stdClass $query;
    protected const TYPE_SELECT = 'select';
    protected const TYPE_UPDATE = 'update';
    protected const TYPE_DELETE = 'delete';
    
    protected function reset(): void
    {
        $this->query = new stdClass();
    }
    
    public function select(string $table, array $fields): SQLQueryBuilder
    {
        $this->reset();
        $fields = implode(', ', $fields);
        $this->query->base = "SELECT $fields FROM $table";
        $this->query->type = self::TYPE_SELECT;
        
        return $this;
    }
    
    /**
     * @throws Exception
     */
    public function where(string $field, string $value, string $operator = '='): SQLQueryBuilder
    {
        if (!in_array($this->query->type, [self::TYPE_SELECT, self::TYPE_UPDATE, self::TYPE_DELETE])) {
            throw new Exception('WHERE can oly be added to SELECT, UPDATE or DELETE');
        }
        
        $this->query->where[] = "$field $operator '$value'";
        
        return $this;
    }
    
    /**
     * @throws Exception
     */
    public function limit(int $start, int $offset = 0): SQLQueryBuilder
    {
        if ($this->query->type !== self::TYPE_SELECT) {
            throw new Exception("LIMIT can only be added to SELECT");
        }
        
        $this->query->limit = " LIMIT $start, $offset";
        
        return $this;
    }
    
    public function getSQL(): string
    {
        $query = $this->query;
        $sql = $query->base;
        
        if (!empty($query->where)) {
            $conditions = implode(' AND ', $query->where);
            $sql .= " WHERE $conditions";
        }
        
        if (isset($query->limit)) {
            $sql .= $query->limit;
        }
        
        $sql .= ';';
        
        return $sql;
    }
}