<?php

declare(strict_types=1);

namespace App\Decorator;

final class LogNotificator extends NotificatorDecorator
{
    /**
     * @param string $text
     * @return string
     */
    public function send(string $text): string
    {
        $text = parent::send($text);

        return $text . ' AND log';
    }
}