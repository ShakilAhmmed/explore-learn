<?php

use App\Learn\ChainOfResponsibility\Main;

require __DIR__ . "/../vendor/autoload.php";

$obj = new Main();
$obj->chain();