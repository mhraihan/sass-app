<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Mail;
use App\Mail\Account\PasswordUpdated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPasswordResetEmail
{

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(PasswordReset $event)
    {
        $user = $event->user;
        Mail::to($user)->send(new PasswordUpdated($user));
    }
}
