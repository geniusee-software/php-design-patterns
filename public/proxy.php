<?php

use App\Proxy\AppCarts;
use App\Proxy\LaptopCart;
use App\Proxy\LaptopProxy;


(new AppCarts((new LaptopCart())))->getData($request);


$proxy = new LaptopProxy((new LaptopCart()), (new Redis()));
(new AppCarts($proxy))->getData($request);
