<?php


namespace App\Adapter;


class Book implements BookInterface
{
    public function open()
    {
        echo "Reading" . PHP_EOL;
    }

    public function nextPage()
    {
        echo "Next Page" . PHP_EOL;
    }
}