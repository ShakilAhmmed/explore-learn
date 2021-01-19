<?php


namespace App\Adapter;


interface eReaderInterface
{
    public function open();

    public function swipe();
}