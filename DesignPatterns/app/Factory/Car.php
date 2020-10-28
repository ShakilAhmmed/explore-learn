<?php

namespace App\Factory;

class Car
{
    private $vehicleMake;
    private $vehicleModel;

    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    /**
     * @return string
     */
    public function details(): string
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}
