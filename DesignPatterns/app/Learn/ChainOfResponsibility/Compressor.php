<?php


namespace App\Learn\ChainOfResponsibility;


class Compressor extends Handler
{
    public function __construct($next = null)
    {
        parent::__construct($next);
    }

    public function doHandle(HttpRequest $httpRequest): bool
    {
        echo "Compress" . PHP_EOL;
        return false;
    }
}