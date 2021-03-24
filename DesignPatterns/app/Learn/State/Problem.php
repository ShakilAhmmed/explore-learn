<?php


namespace App\Learn\State;

class Problem
{
    private $travelMode;
    const DRIVING = 1;
    const BICYCLING = 2;
    const TRANSIT = 3;

    public function getEta()
    {
        if ($this->travelMode == self::DRIVING) {
            echo "Calculating ETA (driving)";
        } else if ($this->travelMode == self::BICYCLING) {
            echo "Calculating ETA (bicycling)";
        } else if ($this->travelMode == self::TRANSIT) {
            echo "Calculating ETA (transit)";
        } else {
            echo "Calculating ETA (walking)";
        }
    }

    public function getDirection()
    {
        if ($this->travelMode == self::DRIVING) {
            echo "Calculating Direction (driving)";
        } else if ($this->travelMode == self::BICYCLING) {
            echo "Calculating Direction (bicycling)";
        } else if ($this->travelMode == self::TRANSIT) {
            echo "Calculating Direction (transit)";
        } else {
            echo "Calculating Direction (walking)";
        }
    }

    public function getTravelMode()
    {
        return $this->travelMode;
    }

    public function setTravelMode($travelMode)
    {
        $this->travelMode = $travelMode;
    }
}