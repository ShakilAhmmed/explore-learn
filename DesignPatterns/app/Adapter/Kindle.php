<?php


namespace App\Adapter;


class Kindle implements eReaderInterface
{

    public function open()
    {
        echo "Open E Reader Book" . PHP_EOL;
    }

    public function swipe()
    {
        echo "Swipe Reader Book" . PHP_EOL;
    }
}