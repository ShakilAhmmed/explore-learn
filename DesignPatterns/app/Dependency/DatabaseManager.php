<?php

namespace App\Dependency;
interface DatabaseManager
{
    public function connection();
    public function save(array $data);
}