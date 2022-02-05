<?php

namespace App\Mail\Auth;

use App\User;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class VerifyMail extends Mailable
{
    use SerializesModels;

    public $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Singap conf')
            ->markdown('emails.auth.register.verify');
    }
}
