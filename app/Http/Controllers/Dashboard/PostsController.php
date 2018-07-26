<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');

    }

    public function index()
    {
    }

    /**
     * Create post
     *
     * @return void
     */
    public function create()
    {
        return view('dashboard.posts.create');
    }

    /**
     * Store the post
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:10'
        ]);

        $data['user_id'] = $request->user()->id; 

        $post = Post::create($data);

        return back()->with('messages', ['Post created with ID: ' . $post->id]);
    }


}
