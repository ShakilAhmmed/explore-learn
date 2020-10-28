<?php

namespace App\Factory;

class CarFactory
{
    /**
     * @param $make
     * @param $model
     * @return Car
     */
    public static function create($make, $model): Car
    {
        return new Car($make, $model);
    }
}