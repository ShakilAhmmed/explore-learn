<?php


namespace App\Decorator;


class Notify
{
    private $title, $message;

    public function __construct($title, $message)
    {
        $this->title = $title;
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function view(): string
    {
        return $this->getTitle() . "," . $this->getMessage();
    }

    /**
     * @return string
     */
    public function send(): string
    {
        return "Send Notification {$this->view()}" . PHP_EOL;
    }
}