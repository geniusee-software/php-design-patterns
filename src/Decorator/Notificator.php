<?php

declare(strict_types=1);

namespace App\Decorator;

interface Notificator
{
    /**
     * @param string $text
     * @return string
     * Интерфейс Компонента объявляет метод, который должен быть
     * реализован всеми конкретными компонентами и декораторами.
     */
    public function send(string $text): string;
}
