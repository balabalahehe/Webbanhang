<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class dangKyTaiKhoanMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function build()
    {
        return $this->subject('Chúc mừng bạn đã đăng ký tài khoản thành công')
                    ->view('mails.dangky', ['details' => $this->details]);
    }
}
