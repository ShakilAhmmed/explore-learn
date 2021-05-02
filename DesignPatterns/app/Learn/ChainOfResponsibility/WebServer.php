<?php


namespace App\Learn\ChainOfResponsibility;


class WebServer
{
    private $handler;

    public function __construct(Handler $handler)
    {
        $this->handler = $handler;
    }

    public function handle(HttpRequest $request)
    {
        $this->handler->handle($request);
    }
}