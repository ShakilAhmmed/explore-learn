<?php


namespace App\Builder\Parts;


class Truck implements Vehicle
{


    public function setParts(string $key, $value)
    {
        $className = new \ReflectionClass($value);
        echo "Set $key BY " . $className->getShortName() . " Class ".PHP_EOL;
    }
}