<?php


namespace App\Builder;


use App\Builder\Parts\Vehicle;

class Director
{
    public static function build(AutoMobileBuilder $autoMobileBuilder): Vehicle
    {
        $autoMobileBuilder->createVehicle();
        $autoMobileBuilder->addDoors();
        $autoMobileBuilder->addEngine();
        $autoMobileBuilder->addWheel();
        return $autoMobileBuilder->getVehicle();
    }
}