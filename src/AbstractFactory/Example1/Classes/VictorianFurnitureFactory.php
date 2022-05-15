<?php

namespace Src\AbstractFactory\Example1\Classes;

use Src\AbstractFactory\Example1\Classes\Chairs\VictorianChair;
use Src\AbstractFactory\Example1\Classes\CoffeeTables\VictorianCoffeeTable;
use Src\AbstractFactory\Example1\Contracts\Chair;
use Src\AbstractFactory\Example1\Contracts\CoffeeTable;
use Src\AbstractFactory\Example1\Contracts\FurnitureFactory;

class VictorianFurnitureFactory implements FurnitureFactory
{
    
    public function createChair(): Chair
    {
        return new VictorianChair();
    }
    
    public function createCoffeeTable(): CoffeeTable
    {
        return new VictorianCoffeeTable();
    }
}