<?php

namespace Src\AbstractFactory\Example1\Contracts;

interface FurnitureFactory
{
    public function createChair(): Chair;
    public function createCoffeeTable(): CoffeeTable;
}
