<?php

namespace App\Http\Controllers;

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

    }

    /**
     * Show the all subscribtions for that user
     *
     * @return void
     */
    public function show()
    {       

    }

    /**
     * For email link unsubscribe
     *
     * @param Request $request
     * @param User $user
     * @param string $email
     * @return Redirect
     */
    public function unsubscribe(Request $request, User $user, $email) {

        // check if subscribed
        $sub = $user->subscribers()->where('email', $email)->first();

        if($sub != null) {
            $sub->delete();
        }

        return redirect()->route('user-show', [$user->id])->with('messages', ['Unsubscribed!']);
    }
}
