<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboardcontroller extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
      //dd(auth()->user());

        return view('posts.dashboard');
    }
}
