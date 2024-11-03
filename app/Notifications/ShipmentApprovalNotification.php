<?php

namespace App\Notifications;

use App\Models\Shipment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ShipmentApprovalNotification extends Notification
{
    use Queueable;

    protected Shipment $shipment;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Shipment $shipment)
    {
        $this->shipment = $shipment;
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
        $images = $this->shipment->itemPhoto()->pluck('photo_path')->toArray();
        $mailMessage = (new MailMessage)
        ->subject('Your Shipment is on its way')
        ->markdown('email.shipment-approval',[
            'shipment'=>$this->shipment
        ]);
        if(count($images)>0){
            foreach ($images as $image) {
                $mailMessage->attach(public_path('storage/'.$image));
            }    
        }      
        return $mailMessage;  
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
