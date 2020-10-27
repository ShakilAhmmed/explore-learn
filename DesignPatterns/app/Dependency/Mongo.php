<?php


namespace App\Dependency;
class Mongo implements DatabaseManager
{
    public function connection()
    {
        echo "connected";
    }

    public function save(array $data)
    {
        echo "saving Mongo";
        print_r($data);
    }
}