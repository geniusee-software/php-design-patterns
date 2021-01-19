<?php

declare(strict_types=1);

namespace App\Test;

use App\Decorator\LogNotificator;
use App\Decorator\SendSmsToAdminDecorator;
use App\Decorator\Sms;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    private const SMS_TEXT = 'Your order was payed';
    private const SMS_TEXT_TEST = 'SMS with text %s has been sent %s';
    private const SMS_TEXT_WITH_LOG = 'AND log';
    private const SMS_TEXT_WITH_LOG_AND_ADMIN_MESSAGE = self::SMS_TEXT_WITH_LOG . ' AND send to admin';

    /**
     *
     */
    public function testSimpleSms(): void
    {
        $newSms = (new Sms())
            ->send(self::SMS_TEXT);
        $this->assertSame($this->expectedText(), $newSms);
    }

    /**
     *
     */
    public function testLogSms(): void
    {
        $smsSend = new Sms();
        $newSms = (new LogNotificator($smsSend))->send(self::SMS_TEXT);
        $this->assertSame(
            $this->expectedText(self::SMS_TEXT_WITH_LOG),
            $newSms
        );
    }

    /**
     *
     */
    public function testLogAndAdminSendSms(): void
    {
        $smsSend = new Sms();
        $logSms = new LogNotificator($smsSend);
        $newSms = (new SendSmsToAdminDecorator($logSms))
            ->send(self::SMS_TEXT);
        $this->assertSame(
            $this->expectedText(self::SMS_TEXT_WITH_LOG_AND_ADMIN_MESSAGE),
            $newSms
        );
    }

    /**
     * @param string $text
     * @return string
     */
    private function expectedText(string $text = ''): string
    {
        return trim(
            sprintf(self::SMS_TEXT_TEST, self::SMS_TEXT, $text)
        );
    }
}