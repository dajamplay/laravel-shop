<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword as ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class ResetPasswordEmail extends ResetPassword
{
    protected function buildMailMessage($url): MailMessage
    {
        return (new MailMessage)
            ->subject(Lang::get('Уведомление о сбросе пароля'))
            ->line(Lang::get('Вы получаете это электронное письмо, потому что мы получили запрос на сброс пароля для вашей учетной записи.'))
            ->action(Lang::get('Сброс пароля'), $url)
            ->line(Lang::get('Срок действия этой ссылки для сброса пароля истечет через :count минут.', ['count' => config('auth.passwords.' . config('auth.defaults.passwords') . '.expire')]))
            ->line(Lang::get('Если вы не запрашивали сброс пароля, никаких дальнейших действий не требуется.'));
    }
}
