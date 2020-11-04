<?php
require __DIR__ . "/vendor/autoload.php";

use \App\AbstractFactory\VehicleFactory;

$vehicleFactory = new VehicleFactory();
$carFactory = $vehicleFactory->make("car");
$car = $carFactory->create("Nissan", "Sunny");
echo $car->getName() . PHP_EOL;
$truckFactory = $vehicleFactory->make("truck");
$truck = $truckFactory->create("Tata", "Toto");
echo $truck->getName() . PHP_EOL;