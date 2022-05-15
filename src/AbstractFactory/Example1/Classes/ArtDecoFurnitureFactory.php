<?php

namespace Src\AbstractFactory\Example1\Classes;

use Src\AbstractFactory\Example1\Classes\Chairs\ArtDecoChair;
use Src\AbstractFactory\Example1\Classes\CoffeeTables\ArtDecoCoffeeTable;
use Src\AbstractFactory\Example1\Contracts\Chair;
use Src\AbstractFactory\Example1\Contracts\CoffeeTable;
use Src\AbstractFactory\Example1\Contracts\FurnitureFactory;

class ArtDecoFurnitureFactory implements FurnitureFactory
{
    public function createChair(): Chair
    {
        return new ArtDecoChair();
    }
    
    public function createCoffeeTable(): CoffeeTable
    {
        return new ArtDecoCoffeeTable();
    }
}