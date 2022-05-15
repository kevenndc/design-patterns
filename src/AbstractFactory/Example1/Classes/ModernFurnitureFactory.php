<?php

namespace Src\AbstractFactory\Example1\Classes;

use Src\AbstractFactory\Example1\Classes\Chairs\ModernChair;
use Src\AbstractFactory\Example1\Classes\CoffeeTables\ModernCoffeeTable;
use Src\AbstractFactory\Example1\Contracts\Chair;
use Src\AbstractFactory\Example1\Contracts\CoffeeTable;
use Src\AbstractFactory\Example1\Contracts\FurnitureFactory;

class ModernFurnitureFactory implements FurnitureFactory
{
    
    public function createChair(): Chair
    {
        return new ModernChair();
    }
    
    public function createCoffeeTable(): CoffeeTable
    {
        return new ModernCoffeeTable();
    }
}