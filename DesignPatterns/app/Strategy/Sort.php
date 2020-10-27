<?php

namespace App\Strategy;

class Sort implements SortingInterface
{
    public function sort(array $data): array
    {
        sort($data);
        return $data;
    }
}