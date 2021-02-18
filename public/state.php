<?php

use App\State\Context;
use App\State\ConcreteStateA;

require_once '../vendor/autoload.php';

$context = new Context(new ConcreteStateA());
$context->request1();
$context->request2();