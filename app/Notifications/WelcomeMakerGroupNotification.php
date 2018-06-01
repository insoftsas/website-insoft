<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class WelcomeMakerGroupNotification extends Notification
{
    use Queueable;
    private $password;
    private $group;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($password,$group)
    {
        $this->password = $password;
        $this->group = $group;
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
                    ->line('Tu inscripción como maker de forma GRUPAL se ha completado correctamente, proximamente estaremos notificandote sobre las fases del evento, has sido agregado correctamente al siguiente grupo: ')
                    ->line('Grupo: '.$this->group->name)
                    ->line('Maker Lider: '.$this->group->leader->first_name.' '.$this->group->leader->last_name)
                    ->line('')
                    ->line('A continuación se te provee el usuario y contraseña para acceder al sitio web:')
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
