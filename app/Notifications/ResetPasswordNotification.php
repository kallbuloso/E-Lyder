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
           ->subject('Redefinição de senha')
           ->greeting('Olá '.$notifiable->name)
           ->line('Você está recebendo este e-mail porque foi solicitado uma redefinição de senha para sua conta.')
           ->action('Redefinir a senha', url(config('app.url').route('password.reset', $this->token, false)))
           ->line('Se você não solicitou uma redefinição de senha, nenhuma outra ação será necessária.')
           ->salutation('Atenciosamente, equipe '.config('app.name', 'Laravel').'.');
   }
}