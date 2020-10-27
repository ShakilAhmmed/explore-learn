<?php

namespace App\Dependency;
class Mysql implements DatabaseManager
{
    public function connection()
    {
        echo "connected";
    }

    public function save(array $data)
    {
        echo "saving Mysql";
        print_r($data);
    }
}