<?php

namespace App\Observer;
interface Observeable
{
    /**
     * @param Observer $observer
     * @return mixed
     */
    public function attach(Observer $observer);

    /**
     * @param $event
     * @param $info
     * @return mixed
     */
    public function notify($event, $info);
}