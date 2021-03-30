<?php


use App\Learn\State\BiCycle;
use App\Learn\State\DefaultMode;
use App\Learn\State\Driving;
use App\Learn\State\Main;
use App\Learn\State\Solution;
use App\Learn\State\Transit;

require __DIR__ . "/../vendor/autoload.php";

$obj = new Solution(new BiCycle());

$obj->getEta();
echo PHP_EOL;
$obj->getDirection();
echo PHP_EOL;
$obj->setTravelModel(new Transit());
$obj->getEta();
echo PHP_EOL;
$obj->getDirection();
echo PHP_EOL;
$obj->setTravelModel(new Driving());
$obj->getEta();
echo PHP_EOL;
$obj->getDirection();
echo PHP_EOL;
$obj->setTravelModel(new DefaultMode());
$obj->getEta();
echo PHP_EOL;
$obj->getDirection();
