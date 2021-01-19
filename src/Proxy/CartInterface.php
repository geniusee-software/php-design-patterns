<?php

declare(strict_types=1);

namespace App\Proxy;

interface CartInterface
{
    public function getCard(int $limit, int $offset): array;
}