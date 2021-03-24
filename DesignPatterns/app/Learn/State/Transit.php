<?php


namespace App\Learn\State;


class Transit implements TravelModeContracts
{
    /**
     * @return mixed|void
     */
    public function etaCalculation()
    {
        echo "Calculating ETA (transit)";
    }

    /**
     * @return mixed|void
     */
    public function direction()
    {
        echo "Calculating Direction (transit)";
    }
}