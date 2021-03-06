<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordNotification extends Notification
{
    
    /**
     * The password reset token.
     *
     * @var string
     */
    public $token;

    /**
     * Create a notification instance.
     *
     * @param  string  $token
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Reinicio de contraseña')
            ->greeting('Hola ' . $notifiable->name)
            ->line('Recibes este email porque se solicito un reestablecimiento de contraseña para tu cuenta.')
            ->action('Restablecer Contraseña', url(config('app.url').route('passwords.reset', $this->token, false)))
            ->line('Si no solicitaste un reestablecimiento de contraseña puedes ignorar este correo.')
            ->salutation('¡Saludos!');
    }

}
