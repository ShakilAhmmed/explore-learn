<?php

namespace App\AbstractFactory;
class VehicleFactory
{
    public function make($type)
    {
        if ($type == "car") {
            return new CarFactory();
        } elseif ($type == "truck") {
            return new TruckFactory();
        } else {
            return false;
        }
    }
}