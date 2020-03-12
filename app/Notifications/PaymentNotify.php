<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Lang;


class PaymentNotify extends Notification
{
    use Queueable;
    public $ord;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Order $ord)
    {
        
        $this->ord=$ord;
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
        
//     dd($this->ord);
            return (new MailMessage)
            ->greeting('Hello! '.$notifiable->name)
            ->subject(Lang::getFromJson('Careerhigh payment link'))
            ->line(Lang::getFromJson("Payment of Workshop."))
            ->action(Lang::getFromJson('Pay Now'), route('paynow',['orderid'=>$this->ord->id,'token'=>$this->ord->token]))
            ->line(Lang::getFromJson('ThankYou'));
            
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
