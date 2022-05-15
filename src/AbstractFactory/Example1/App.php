<?php

namespace Src\AbstractFactory\Example1;

use Src\AbstractFactory\Example1\Classes\ArtDecoFurnitureFactory;
use Src\AbstractFactory\Example1\Classes\ModernFurnitureFactory;
use Src\AbstractFactory\Example1\Classes\VictorianFurnitureFactory;
use Src\AbstractFactory\Example1\Contracts\FurnitureFactory;

class App
{
    public function __construct()
    {
        $this->createFurniture(new ModernFurnitureFactory());
    }
    
    public function createFurniture(FurnitureFactory $factory)
    {
        $chair = $factory->createChair();
        $coffeeTable = $factory->createCoffeeTable();
        
        echo 'chair class: ' . get_class($chair);
        echo '<br>';
        echo 'coffee table class: ' . get_class($coffeeTable);
    }
}