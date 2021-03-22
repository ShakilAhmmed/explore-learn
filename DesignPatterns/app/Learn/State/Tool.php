<?php


namespace App\Learn\State;


interface Tool
{
    public function mouseUp(): string;

    public function mouseDown(): string;
}