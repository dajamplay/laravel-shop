<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailBase;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class VerifyEmail extends VerifyEmailBase
{
    protected function buildMailMessage($url): MailMessage
    {
        return (new MailMessage)
            ->subject(Lang::get('Подтвердите адрес электронной почты'))
            ->line(Lang::get('Пожалуйста, нажмите на кнопку ниже, чтобы подтвердить свой адрес электронной почты.'))
            ->action(Lang::get('Подтвердите адрес электронной почты'), $url)
            ->line(Lang::get('Если вы не создавали учетную запись, никаких дальнейших действий не требуется.'));
    }
}
