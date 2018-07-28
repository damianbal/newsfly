<?php

namespace App\Http\Controllers\Dashboard;

use App\Core\NewsSender;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SendEmailNewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function send(Request $request)
    {
        if (NewsSender::send($request->user()->id)) {
            return back()->with('messages', ['News have been sent out!']);
        }

        return back()->with('messages', ['News have not been sent out because you have no subscribers or there is no news to send!']);
    }
}
