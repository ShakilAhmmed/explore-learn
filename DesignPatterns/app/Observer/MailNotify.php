<?php

namespace App\Observer;

class MailNotify implements Observer
{
    /**
     * @param Observeable $observeable
     * @param $info
     * @param $event
     * @return mixed|void
     */
    public function update(Observeable $observeable, $info, $event)
    {
        $from = __CLASS__;
        echo "{$from} --->{$info} {$event}" . PHP_EOL;
    }
}