<?php

namespace App\Observer;
interface Observer
{
    /**
     * @param Observeable $observeable
     * @param $info
     * @param $event
     * @return mixed
     */
    public function update(Observeable $observeable, $info, $event);
}