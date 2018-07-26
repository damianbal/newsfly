<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\User;
use Illuminate\Support\Facades\Mail;

class SendNews implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // get all the users
        $users = User::all();

        foreach($users as $user) {
            $posts = $user->posts()->orderBy('created_at', 'DESC')->get();
            $subs = $user->subscribers()->get();

            // if there is no posts and no subscribers then skip
            if(count($posts) < 1 && count($subs) < 1) {
                continue;
            }

            // send to each subscriber
            foreach ($subs as $sub) {
                
                Mail::send('mails.mail', ['posts' => $posts, 'user' => $user->name], function($message) use ($user, $sub) {
                    $message->from('newsfly@newsfly.com', "Newsfly: " . $user->name);
                    $message->to( $sub->email );
                });

               
            }

            $user->posts()->delete(); // remove all the posts after sending them out
        }
    }
}
