<?php

namespace App\Decorator;

class SendSmsToAdminDecorator extends NotificatorDecorator
{
    /**
     * @param string $text
     * @return string
     */
    public function send(string $text): string
    {
        $text = parent::send($text);

        return $text . ' AND send to admin';
    }
}