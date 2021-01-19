<?php
require __DIR__ . "/vendor/autoload.php";

use \App\Decorator\Notify;
use \App\Decorator\EmailNotification;
use \App\Decorator\SlackNotification;

$notify = new Notify("WelCome", "Hello Sir , How Are You");
echo $notify->send();
$emailNotify = new EmailNotification($notify);
echo $emailNotify->send();
$slackNotify = new SlackNotification($notify);
echo $slackNotify->send();
