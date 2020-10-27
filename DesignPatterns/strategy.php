<?php
require __DIR__ . "./vendor/autoload.php";

use App\Strategy\Sorting;
use \App\Strategy\Sort;

$sort = new Sort();
$user = new Sorting($sort);
$user->sort([2, 3, 4, 1]);
$user->setStrategy(new \App\Strategy\RSort());
$user->sort([2, 3, 4, 1]);