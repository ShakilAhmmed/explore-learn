<?php


namespace App\Learn\ChainOfResponsibility;


class Main
{
    public function chain()
    {
        $compressor = new Compressor(null);
        $logger = new Logger($compressor);
        $authenticator = new Authenticator($logger);
        $server = new WebServer($authenticator);
        $server->handle(new HttpRequest("admin", "123456"));
    }
}