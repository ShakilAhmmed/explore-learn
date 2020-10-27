<?php


namespace App\Decorator;


class SlackNotification
{
    private $notify;

    public function __construct(Notify $notify)
    {
        $this->notify = $notify;
    }

    public function send(): string
    {
        return "Send Notification Via Slack {$this->notify->view()}" . PHP_EOL;
    }

}