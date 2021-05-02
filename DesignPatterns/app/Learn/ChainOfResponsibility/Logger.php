<?php


namespace App\Learn\ChainOfResponsibility;


class Logger extends Handler
{
    public function __construct(Handler $next)
    {
        parent::__construct($next);
    }

    public function doHandle(HttpRequest $httpRequest): bool
    {
        echo "Log" . PHP_EOL;
        return false;
    }
}