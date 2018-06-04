<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class WelcomeMakerNotification extends Notification
{
    use Queueable;
    private $password;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($password)
    {
        $this->password = $password;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject(config('app.name').' | Inscripción Completada')
                    ->greeting('Hola!')
                    ->line('Su inscripción como maker de forma individual se ha completado correctamente, a continuación se le provee el usuario y contraseña para acceder a la aplicación, proximamente estaremos notificandote sobre las fases del evento.')
                    ->line('Correo: '.$notifiable->email)
                    ->line('Contraseña: '.$this->password)
                    ->action('Iniciar sesion', url('/').'#/login')
                    ->line('Gracias por hacer parte de la Hackathon Montería!')
                    ->salutation(config('app.name'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
