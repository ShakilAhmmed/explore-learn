<?php

namespace App\Strategy;

class RSort implements SortingInterface
{
    public function sort(array $data): array
    {
        rsort($data);
        return $data;
    }
}