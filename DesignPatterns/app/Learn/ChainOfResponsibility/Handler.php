<?php


namespace App\Learn\ChainOfResponsibility;


abstract class Handler
{
    private $next;

    public function __construct($next = null)
    {
        $this->next = $next;
    }

    public function handle(HttpRequest $httpRequest)
    {
        if ($this->doHandle($httpRequest)) {
            return;
        }
        if ($this->next !== null) {
            $this->next->handle($httpRequest);
        }
    }

    public abstract function doHandle(HttpRequest $httpRequest);
}