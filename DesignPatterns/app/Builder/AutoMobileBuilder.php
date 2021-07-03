<?php


namespace App\Builder;



interface AutoMobileBuilder
{
    public function createVehicle();
    public function addWheel();
    public function addEngine();
    public function addDoors();
    public function getVehicle();
}