<?php

namespace App\AbstractFactory;

class Truck
{
    private $name, $model;

    /**
     * Car constructor.
     * @param $name
     * @param $model
     */
    public function __construct($name, $model)
    {
        $this->name = $name;
        $this->model = $model;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getDetails(): string
    {
        return "Truck Name Is: {$this->getName()} and Model Is: {$this->getModel()}";
    }
}
