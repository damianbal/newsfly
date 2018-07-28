<?php

namespace App\Http\Controllers;

use App\Events\Subscribed;
use App\Subscriber;
use App\User;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function submit(Request $request)
    {
        $user = User::find($request->input('user_id'));

        $result = $user->subscribers()->where('email', $request->input('email'))->get();

        if (count($result) > 0) {
            return back()->with('messages', ['You are already subscribed to that user!']);
        }

        $subscriber = Subscriber::create($request->all());

        event(new Subscribed($user, $request->input('email')));

        return back()->with('messages', ['You subscribed!']);
    }

}
