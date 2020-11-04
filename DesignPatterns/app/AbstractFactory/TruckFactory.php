<?php

namespace App\AbstractFactory;

class TruckFactory extends BaseFactory
{

    public function create($name, $model)
    {
        return new Truck($name, $model);
    }
}
