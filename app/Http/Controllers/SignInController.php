<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    public function show()
    {
        return view('sign-in');
    }

    public function submit(Request $request)
    {
        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
            return redirect()->route('home')->with('messages', ['You have been signed in!']);
        }
        else {
            return back()->with('messages', ['Account does not exist or email and password do not match!']);
        }
    }

    public function signOut()
    {
        Auth::logout();

        return back()->with('messages', ['You have been signed out!']);
    }
}
