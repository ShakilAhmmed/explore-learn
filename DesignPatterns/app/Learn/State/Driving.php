<?php


namespace App\Learn\State;


class Driving implements TravelModeContracts
{
    /**
     * @return mixed|void
     */
    public function etaCalculation()
    {
        echo "Calculating ETA (driving)";
    }

    /**
     * @return mixed|void
     */
    public function direction()
    {
        echo "Calculating Direction (driving)";
    }
}