<?php

namespace App\Listeners;

use App\Events\Subscribed;
use Illuminate\Support\Facades\Mail;

class SendEmailAboutSubscribing
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Subscribed  $event
     * @return void
     */
    public function handle(Subscribed $event)
    {
        $user = $event->user;
        $email = $event->email;

        Mail::send('mails.subscribtion', ['unsub_url' => route('unsubscribe', [$user->id, $email]), 'user' => $user], function ($message) use ($user, $email) {
            $message->from('newsfly@newsfly.com', "Newsfly: " . $user->name);
            $message->to($email);
            $message->subject('You subscribed to  ' . $user->name . " on Newsfly!");
        });
    }
}
