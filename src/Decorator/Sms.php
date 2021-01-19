<?php

declare(strict_types=1);

namespace App\Decorator;

final class Sms implements Notificator
{
    /**
     * @param string $text
     * @return string
     * Данный класс содержит исходный код без каких либо дополнительных реализаций.
     */
    public function send(string $text): string
    {
        return 'SMS with text ' . $text . ' has been sent';
    }
}