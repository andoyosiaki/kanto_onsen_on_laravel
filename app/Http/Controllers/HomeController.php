<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Onsen;

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
        return view('home');
    }

    public function show()
    {
        return view('gets.show');
    }

    public function add(Request $request)
    {
        $post = new Onsen();
        $post->timestamps = false;
        $post->fill($request->all())->save();
        return view('home');
    }
}
