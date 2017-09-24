<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class TransactionConfirmation extends Notification
{
    use Queueable;

    public $transaction;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        switch ($this->transaction->status_id) {
            case 2:
                $message = 'Transaksi #'.$this->transaction->code.' diproses';
                break;

            case 3:
                $message = 'Transaksi #'.$this->transaction->code.' selesai';
                break;

            case 4:
                $message = 'Transaksi #'.$this->transaction->code.' dibatalkan';
                break;
        }
        return [
            'message' => $message,
            'icon' => 'fa fa-archive bg-green',
            'action' => '/transaction/'.$this->transaction->id,
        ];
    }
}
