<?php

use App\Builder\Director;
use App\Builder\TruckBuilder;

require __DIR__ . "/../vendor/autoload.php";

$truckBuilder = new TruckBuilder();
$truck = Director::build($truckBuilder);