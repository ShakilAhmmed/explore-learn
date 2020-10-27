<?php

namespace App\Dependency;

use App\Dependency\Mysql;

class Category
{
    private $db;

    public function __construct(DatabaseManager $manager)
    {
        $this->db = $manager;
    }

    public function save(array $data)
    {
        return $this->db->save($data);
    }
}