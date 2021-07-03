<?php

namespace App\AbstractFactory;

class CarFactory extends BaseFactory
{

    public function create($name, $model): Car
    {
        return new Car($name, $model);
    }
}
