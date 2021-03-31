<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use App\Models\user\post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $categories=$user->categories;
        $tags=$user->tags;
        $posts=$user->posts;
        return view('admin/home',compact('posts','categories','tags'));
        // $posts=post::all();
        // return view('admin/home',compact('posts'));
        //  return view('home');
    }
}
