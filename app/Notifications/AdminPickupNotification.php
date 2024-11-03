<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdminPickupNotification extends Notification
{
    use Queueable;

    public $pickup;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($pickup)
    {
        $this->pickup = $pickup;
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
                    ->subject('PICK UP REQUEST')
                    ->line('Pickup summary')
                    ->line('Client Name: '.$this->pickup["name"])
                    ->line('Client Email: '.$this->pickup["email"])
                    ->line('Client Phone: '.$this->pickup["phone"])
                    ->line('Pickup Item(s): '.$this->pickup["pickup_item"])
                    ->line('Pickup Date: '.$this->pickup["pickup_date"])
                    ->line('Pickup Time: '.$this->pickup["pickup_time"])
                    ->line('Pickup Address: '.$this->pickup["pickup_address"])
                    ->line('Administrator please endevor to contact the client');
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
