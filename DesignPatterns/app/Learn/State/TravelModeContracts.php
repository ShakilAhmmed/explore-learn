<?php


namespace App\Learn\State;


interface TravelModeContracts
{
    /**
     * @return mixed
     */
    public function etaCalculation();

    /**
     * @return mixed
     */
    public function direction();
}