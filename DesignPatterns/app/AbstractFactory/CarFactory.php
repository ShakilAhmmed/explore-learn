<?php

namespace App\AbstractFactory;

class CarFactory extends BaseFactory
{

    public function create($name, $model)
    {
        return new Truck($name, $model);
    }
}
