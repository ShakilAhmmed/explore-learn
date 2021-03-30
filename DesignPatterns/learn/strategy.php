<?php

use App\Learn\Strategy\AesEncryption;
use App\Learn\Strategy\DesEncryption;
use App\Learn\Strategy\Solution;

require __DIR__ . "/../vendor/autoload.php";

$strategy = new Solution();
$strategy->chatClient(new DesEncryption());
$strategy->send();
echo PHP_EOL;
$strategy->chatClient(new AesEncryption());
$strategy->send();