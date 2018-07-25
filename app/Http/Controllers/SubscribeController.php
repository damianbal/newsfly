<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;
use App\User;

class SubscribeController extends Controller
{
    public function submit(Request $request)
    {
        $user = User::find($request->input('user_id'));

        $result = $user->subscribers()->where('email', $request->input('email'))->take(1)->get();

        if(count($result) > 0) {
            return back()->with('messages', ['You are already subscribed to that user!']);
        }

        $subscriber = Subscriber::create($request->all());

        return back()->with('messages', ['You subscribed!']);
    }
}
