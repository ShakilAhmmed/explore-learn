<?php


namespace App\Learn\Template;


class Window
{
    public function close()
    {
        $this->onClosing();
        echo "Removing the window from the screen" . PHP_EOL;
        $this->onClosed();
    }

    protected function onClosing()
    {
    }

    protected function onClosed()
    {
    }
}