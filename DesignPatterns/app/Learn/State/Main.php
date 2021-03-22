<?php


namespace App\Learn\State;


class Main
{
    public function __construct()
    {
        $canvas = new Canvas();
        $canvas->setTool(new TextBox());
        echo $canvas->mouseDown();
        echo PHP_EOL;
        echo $canvas->mouseUp();
        echo PHP_EOL;
        $canvas->setTool(new Brush());
        echo $canvas->mouseDown();
        echo PHP_EOL;
        echo $canvas->mouseUp();
    }
}
