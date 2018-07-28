<?php

namespace App\Core;

use App\User;
use Illuminate\Support\Facades\Mail;

/**
 * Sends news from User to Subscribers
 */
class NewsSender
{
    /**
     * Send users posts to subscribers
     *
     * @param integer $user_id
     * @return boolean
     */
    public static function send($user_id)
    {
        $user = User::find($user_id);
        $posts = $user->posts()->orderBy('created_at', 'DESC')->get();
        $subs = $user->subscribers;

        // if there is not posts or subscribers don't send it out
        if (count($subs) < 1 && count($posts) < 1) {
            return false;
        }

        foreach ($subs as $sub) {
            Mail::send('mails.mail', ['unsub_url' => route('unsubscribe', [$user->id, $sub->email]), 'posts' => $posts, 'user' => $user->name], function ($message) use ($user, $sub) {
                $message->from('newsfly@newsfly.com', "Newsfly: " . $user->name);
                $message->to($sub->email);
                $message->subject('News from ' . $user->name);
            });
        }

        $user->posts()->delete();

        return true;
    }
}
