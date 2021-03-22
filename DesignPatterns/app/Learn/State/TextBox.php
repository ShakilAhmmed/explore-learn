<?php


namespace App\Learn\State;


class TextBox implements Tool
{

    public function mouseUp(): string
    {
        return "Draw a dashed rectangle";
    }

    public function mouseDown(): string
    {
        return "Selection Icon";
    }
}