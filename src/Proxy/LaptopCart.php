<?php

declare(strict_types=1);

namespace App\Proxy;

class LaptopCart implements CartInterface
{
    /**
     * @param int $limit
     * @param int $offset
     * @return array
     */
    public function getCard(int $limit, int $offset): array
    {
        return Model::where()
                    ->limit($limit)
                    ->offset($offset)
                    ->all();
    }
}