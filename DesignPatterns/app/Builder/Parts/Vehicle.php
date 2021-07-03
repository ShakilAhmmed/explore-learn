<?php


namespace App\Builder\Parts;


interface Vehicle
{
    public function setParts(string $key, $value);
}