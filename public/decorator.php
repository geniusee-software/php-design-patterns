<?php

declare(strict_types=1);

use App\Decorator\LogNotificator;
use App\Decorator\MessageSender;
use App\Decorator\SendSmsToAdminDecorator;
use App\Decorator\Sms;

require_once '../vendor/autoload.php';

//echo (new Sms())
//        ->send('Your order was payed') . PHP_EOL;


//$smsSend = new Sms();
//echo (new LogNotificator($smsSend))->send('Your order was payed');

//echo (new SendSmsToAdminDecorator(
//    (new LogNotificator(
//        new Sms()
//        )
//    )
//)
//)->send('Your order was payed');


$smsSend = (new MessageSender())
    ;

echo (new LogNotificator($smsSend))->send('Your order was payed');


