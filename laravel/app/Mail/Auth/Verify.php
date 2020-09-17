<?php

namespace App\Mail\Auth;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Verify extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Generated new password for user
     * @var string
     */
    protected $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $password)
    {
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.verify')->with([
            'password' => $this->password
        ]);
    }
}
