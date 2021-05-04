<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function index()
    {
        $posts =Post::get();
        return view('posts.index',[

            'posts' =>$posts
        ]);
    }
    function store(Request $request)
    {
        $this->validate($request ,[
            'body' => 'required',
            ]);

        $request->user()->posts()->create([
            'body'=> $request->body
        ]);

        return back();
    }
}
