<?php

declare(strict_types=1);

namespace App\Proxy;

class AppCarts
{
    private CartInterface $cart;

    public function __construct(CartInterface $cart)
    {
        $this->cart = $cart;
    }

    /**
     * @param Request $request
     * @return array
     */
    public function getData(Request $request): array
    {
        return $this->cart->getCard($request->limit, $request->offset);
    }
 }