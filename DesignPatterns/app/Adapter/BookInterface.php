<?php


namespace App\Adapter;


interface BookInterface
{
    public function open();

    public function nextPage();
}