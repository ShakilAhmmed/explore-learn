<?php


namespace App\Learn\Template;


class ChatWindow extends Window
{
    protected function onClosed()
    {
        echo "Disconnected from the server..." . PHP_EOL;
    }

    protected function onClosing()
    {
        echo "Disconnecting from the server..." . PHP_EOL;
    }
}