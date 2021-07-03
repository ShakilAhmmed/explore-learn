<?php


namespace App\Builder\Parts;


class Car implements Vehicle
{
    public function setParts(string $key, $value)
    {
        echo "Set $key BY " . basename($value) . PHP_EOL;
    }
}