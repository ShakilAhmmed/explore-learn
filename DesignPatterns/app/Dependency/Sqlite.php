<?php

namespace App\Dependency;
class Sqlite implements DatabaseManager
{
    public function connection()
    {
        echo "connected Sqlite";
    }

    public function save(array $data)
    {
        echo "saving Sqlite";
        print_r($data);
    }
}
