<?php

namespace App\Traits\Auth;

use App\Models\Manager\User\Team;
use Mail;
use App\Mail\Auth\Verify as VerifyMail;
use Hash;
use Str;
use App;

trait MustVerifyEmail
{
    /**
     * Verify team member email and send password
     * @param  string $email
     */
    public function sendMail($email)
    {
        $password = App::environment('local') ? '123123123' : Str::random(20);
        $user = Team::email($email)->ban(false)->firstOrFail();
        $user->update([
            'password' => Hash::make($password)
        ]);

//        Mail::to($email)->send(new VerifyMail($password));
    }
}
