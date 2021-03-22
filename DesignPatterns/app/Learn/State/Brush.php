<?php


namespace App\Learn\State;


class Brush implements Tool
{

    /**
     * @return string|void
     */
    public function mouseUp(): string
    {
        return "Draw a Line With Brush";
    }

    /**
     * @return string|void
     */
    public function mouseDown(): string
    {
        return "Brush Icon";
    }
}