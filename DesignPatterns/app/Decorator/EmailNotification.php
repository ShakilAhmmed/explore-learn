<?php


namespace App\Decorator;


class EmailNotification
{
    private $notify;

    public function __construct(Notify $notify)
    {
        $this->notify = $notify;
    }

    public function send(): string
    {
        return "Send Notification Via Email {$this->notify->view()}" . PHP_EOL;
    }

}