<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    /**
     * Show the user
     *
     * @param Request $request
     * @return void
     */
    public function show(Request $request, $id) 
    {
        $user = User::find($id);

        if($user == null) {
            return redirect('/404');
        }

        return view('user.show', ['user' => $user]);
    }
}
