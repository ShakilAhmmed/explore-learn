<?php
require __DIR__ . "/vendor/autoload.php";

$category = new \App\Dependency\Category(new \App\Dependency\Mongo());
$category->save([1, 2, 3]);