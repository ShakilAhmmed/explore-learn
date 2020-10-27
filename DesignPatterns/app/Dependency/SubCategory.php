<?php

namespace App\Dependency;

class SubCategory
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