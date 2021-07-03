<?php


namespace App\Builder;


use App\Builder\Parts\Car;
use App\Builder\Parts\Door;
use App\Builder\Parts\Engine;
use App\Builder\Parts\Wheel;

class CarBuilder implements AutoMobileBuilder
{
    private Car $car;
    public function addWheel()
    {
        $this->car->setParts("Wheel1",new Wheel());
        $this->car->setParts("Wheel2",new Wheel());
        $this->car->setParts("Wheel3",new Wheel());
        $this->car->setParts("Wheel4",new Wheel());
    }

    public function addEngine()
    {
        $this->car->setParts("truckEngine",new Engine());
    }

    public function addDoors()
    {
        $this->car->setParts("rightDoor",new Door());
        $this->car->setParts("leftDoor",new Door());
        $this->car->setParts("behindLeftDoor",new Door());
        $this->car->setParts("lefbehindRightDoor",new Door());
    }

    public function getVehicle(): Car
    {
        return $this->car;
    }

    public function createVehicle()
    {
        $this->car = new Car();
    }

}