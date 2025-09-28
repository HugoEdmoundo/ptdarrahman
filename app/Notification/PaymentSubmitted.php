<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\User;
use App\Models\SppPayment;

class PaymentSubmitted extends Notification
{
    use Queueable;

    protected $user;
    protected $payment;

    public function __construct(User $user, SppPayment $payment) {
        $this->user = $user;
        $this->payment = $payment;
    }

    public function via($notifiable) {
        return ['mail'];
    }

    public function toMail($notifiable) {
        return (new MailMessage)
                    ->subject('Pembayaran SPP Baru')
                    ->line("Murid {$this->user->name} mengajukan pembayaran bulan {$this->payment->spp->month} {$this->payment->spp->year}")
                    ->action('Cek Pembayaran', url('/spp/admin'))
                    ->line('Silahkan verifikasi pengajuan pembayaran.');
    }
}
