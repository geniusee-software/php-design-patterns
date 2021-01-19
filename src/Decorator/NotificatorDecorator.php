<?php

declare(strict_types=1);

namespace App\Decorator;

/**
* Базовый класс Декоратора не содержит дополнительной реальной логики . Его основная цель – реализовать базовую
* инфраструктуру
* декорирования: поле для хранения обёрнутого компонента или другого декоратора
* и базовый метод, который делегирует работу обёрнутому объекту.
* Реальная работа  выполняется подклассами.
*/
class NotificatorDecorator implements Notificator
{
    /**
     * @var Notificator
     */
    private Notificator $notificator;

    /**
     * NotificatorDecorator constructor.
     * @param Notificator $notificator
     */
    public function __construct(Notificator $notificator)
    {
        $this->notificator = $notificator;
    }

    /**
     * @param string $text
     * @return string
     */
    public function send(string $text): string
    {
        return $this->notificator->send($text);
    }
}
