<?php

namespace App\Observer;

class Account implements Observeable
{
    private $observers = [];

    /**
     * @param Observer $observer
     */
    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * @param $info
     * @param $event
     */
    public function notify($info, $event)
    {
        foreach ($this->observers as $observer) {
            $observer->update($this, $info, $event);
        }
    }

    /**
     * @param $account_id
     */
    public function create($account_id)
    {
        $this->notify($account_id, "Account Created");
    }

    /**
     * @param $amount
     */
    public function deposit($amount)
    {
        $this->notify($amount, "Amount Deposit");
    }
}