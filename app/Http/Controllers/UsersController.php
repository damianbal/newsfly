<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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

        if ($user == null) {
            return redirect('/404');
        }

        return view('user.show', ['user' => $user]);
    }

    public function index()
    {
//        $users = User::orderBy('created_at', 'DESC')->simplePaginate(12);

        $users = User::withCount('subscribers')->orderBy('subscribers_count', 'desc')->simplePaginate(10);

        return view('user.index', ['users' => $users]);
    }
}
