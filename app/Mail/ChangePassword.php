<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ChangePassword extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public function __construct($_user)
    {
        $this->user = $_user;
    }

    public function build()
    {
        return $this->view('emails.changepass');
    }
}
