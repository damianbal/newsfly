<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class SendEmailNewsController extends Controller
{
    public function send(Request $request)
    {
        $posts = $request->user()->posts()->orderBy('created_at', 'DESC')->get();
        $subs = $request->user()->subscribers;

        if(count($subs) > 0 && count($posts) > 0) {
            foreach ($subs as $sub) {
                Mail::send('mails.mail', ['posts' => $posts, 'user' => $request->user()->name], function($message) use ($request, $sub) {
                    $message->from('newsfly@newsfly.com', "Newsfly: " . $request->user()->name);
                    $message->to( $sub->email );
                });

                // remove posts
                $request->user()->posts()->delete();
                
                return back()->with('messages', ['News have been sent out to ' . count($subs) . " subscribers!"]);
            }
        }
        else {
            return back()->with('messages', ['News have not been sent out because you have no subscribers or there is no news to send!']);
        }

    }
}
