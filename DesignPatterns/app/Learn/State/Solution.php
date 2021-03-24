<?php


namespace App\Learn\State;


class Solution
{
    private $travelModeContracts;

    public function __construct(TravelModeContracts $travelModeContracts)
    {
        $this->travelModeContracts = $travelModeContracts;
    }

    public function getEta()
    {
        $this->travelModeContracts->etaCalculation();
    }

    public function getDirection()
    {
        $this->travelModeContracts->direction();
    }

    public function setTravelModel(TravelModeContracts $travelModeContracts)
    {
        $this->travelModeContracts = $travelModeContracts;
    }
}