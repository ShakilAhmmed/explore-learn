<?php


namespace App\Learn\State;


class DefaultMode implements TravelModeContracts
{
    /**
     * @return mixed|void
     */
    public function etaCalculation()
    {
        echo "Calculating ETA (walking)";

    }

    /**
     * @return mixed|void
     */
    public function direction()
    {
        echo "Calculating Direction (walking)";
    }
}