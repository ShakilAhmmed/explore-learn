<?php


namespace App\Learn\State;


class BiCycle implements TravelModeContracts
{
    /**
     * @return mixed|void
     */
    public function etaCalculation()
    {
        echo "Calculating ETA (bicycling)";
    }

    /**
     * @return mixed|void
     */
    public function direction()
    {
        echo "Calculating Direction (bicycling)";
    }
}