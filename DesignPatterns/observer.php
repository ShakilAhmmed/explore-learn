<?php

require __DIR__ . "./vendor/autoload.php";
use \App\Observer\Account;
use \App\Observer\SmsNotify;
use \App\Observer\MailNotify;
$account = new Account();
$account->attach(new SmsNotify());
$account->attach(new MailNotify());
$account->create(1580025);
$account->deposit(500);
