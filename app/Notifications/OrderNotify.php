<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Lang;

class OrderNotify extends Notification
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
         return (new MailMessage)
            ->greeting('Hello! '.$notifiable->name)
            ->subject(Lang::getFromJson('Careerhigh Order Confirmation'))
            ->line(Lang::getFromJson("Your order has been successfully placed."))
            ->action(Lang::getFromJson('View order'), route('order',['orderid'=>$this->ord->id]))
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
