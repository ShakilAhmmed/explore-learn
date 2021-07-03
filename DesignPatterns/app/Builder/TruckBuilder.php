<?php


namespace App\Builder;


use App\Builder\Parts\Door;
use App\Builder\Parts\Engine;
use App\Builder\Parts\Truck;
use App\Builder\Parts\Wheel;

class TruckBuilder implements AutoMobileBuilder
{
    private Truck $truck;

    public function addWheel()
    {
        $this->truck->setParts("Wheel1", new Wheel());
        $this->truck->setParts("Wheel2", new Wheel());
        $this->truck->setParts("Wheel3", new Wheel());
        $this->truck->setParts("Wheel4", new Wheel());
        $this->truck->setParts("Wheel5", new Wheel());
        $this->truck->setParts("Wheel6", new Wheel());
    }

    public function addEngine()
    {
        $this->truck->setParts("truckEngine", new Engine());
    }

    public function addDoors()
    {
        $this->truck->setParts("rightDoor", new Door());
        $this->truck->setParts("leftDoor", new Door());
    }

    public function getVehicle()
    {
        return $this->truck;
    }

    public function createVehicle()
    {
        $this->truck = new Truck();
    }

}