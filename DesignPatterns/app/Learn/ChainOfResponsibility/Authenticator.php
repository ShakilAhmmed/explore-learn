<?php


namespace App\Learn\ChainOfResponsibility;


class Authenticator extends Handler
{
    public function __construct(Handler $next)
    {
        parent::__construct($next);
    }

    public function doHandle(HttpRequest $httpRequest): bool
    {
        $isValid = ($httpRequest->getUserName() === "admin" && $httpRequest->getPassword() === "123456");
        echo "Authentication" . PHP_EOL;
        return !$isValid;
    }
}