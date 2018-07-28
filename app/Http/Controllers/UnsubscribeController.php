<?php

namespace App\Http\Controllers;

use App\Subscriber;
use App\User;
use Illuminate\Http\Request;

class UnsubscribeController extends Controller
{
    /**
     * Display unsubscribre form
     *
     * @return void
     */
    public function index()
    {
        return view('unsubscribe.form');
    }

    /**
     * Show the all subscribtions for that user
     *
     * @return void
     */
    public function show(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|min:3',
        ]);

        $subs = Subscriber::where('email', $data['email'])->get();

        return view('unsubscribe.list', ['subscribers' => $subs]);
    }

    /**
     * For email link unsubscribe
     *
     * @param Request $request
     * @param User $user
     * @param string $email
     * @return Redirect
     */
    public function unsubscribe(Request $request, User $user, $email)
    {

        // check if subscribed
        $sub = $user->subscribers()->where('email', $email)->first();

        if ($sub != null) {
            $sub->delete();
        }

        return redirect()->route('user-show', [$user->id])->with('messages', ['Unsubscribed!']);
    }
}
