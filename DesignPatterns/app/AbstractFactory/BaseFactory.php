<?php

namespace App\AbstractFactory;

abstract class BaseFactory
{
    abstract public function create($name, $model);
}
