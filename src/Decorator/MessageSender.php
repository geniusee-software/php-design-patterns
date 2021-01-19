<?php

declare(strict_types=1);

namespace App\Decorator;

final class MessageSender implements Notificator
{
    /**
     * @var Notificator|Sms
     */
    private Notificator $sender;

    /**
     * MessageSender constructor.
     */
    public function __construct()
    {
        $this->sender = new Sms();
    }

    /**
     * @param string $text
     * @return string
     */
    public function send(string $text): string
    {
        return $this->sender->send($text);
    }

    /**
     * @return Notificator
     */
    public function switchToViber(): Notificator
    {
        $this->sender = new Viber();

        return $this;
    }
}