<?php

declare(strict_types=1);

namespace App\Proxy;

class LaptopProxy implements CartInterface
{
    /**
     * @var CartInterface
     */
    private CartInterface $cart;

    /**
     * @var
     */
    private $redis;

    public function __construct(CartInterface $cart, $redis)
    {
        $this->cart = $cart;
        $this->redis = $redis;
    }

    /**
     * @param int $limit
     * @param int $offset
     * @return array
     */
    public function getCard(int $limit, int $offset): array
    {
        if ($this->redis->caheIxists($this->getRedisCartCacheKey())) {
            return $this->redis->getCartData($limit, $offset, $this->getRedisCartCacheKey());
        }

        $laptopData = $this->cart->getCard($limit, $offset);
        $this->redis->setCache($laptopData);

        return $laptopData;
    }

    /**
     * @return string
     */
    private function getRedisCartCacheKey(): string
    {
        return 'Laptop';
    }
}