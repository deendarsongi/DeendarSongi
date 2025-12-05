<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CustomerOtpNotification extends Notification
{
    use Queueable;
    private $otp;

    public function __construct($otp)
    {
        $this->otp = $otp;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
        ->view('frontend.customer.emails.customer_otp', ['otp' => $this->otp])
        ->subject('Your OTP Verification Code');
    }
}
