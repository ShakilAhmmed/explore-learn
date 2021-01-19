<?php


require __DIR__ . "/vendor/autoload.php";

use App\Adapter\Book;
use App\Adapter\eBookAdapter;
use App\Adapter\Kindle;
use App\Adapter\Person;

$ebook = new Kindle();
$eReader = new eBookAdapter($ebook);
$person = new Person($eReader);
$person->read();
