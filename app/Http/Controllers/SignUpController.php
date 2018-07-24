<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    public function show()
    {   
        return view('sign-up');
    }

    public function submit(Request $request)
    {
        $data = $request->validate(
            [
                'email' => 'email|required|min:3|unique:users',
                'password' => 'min:4|required',
                'name' => 'min:3|required',
                'description' => 'min:5|required'
            ]
        );

        // hash the password
        $data['password'] = bcrypt($request->input('password'));

        $user = User::create($data);

        return back()->with('messages', ['Your account has been created and your id is: ' . $user->id]);
    }
}
