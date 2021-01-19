<?php
require __DIR__ . "/vendor/autoload.php";

use \App\Factory\CarFactory;

$nissan = CarFactory::create("Toyota", "Nissan 150");
echo $nissan->details();
