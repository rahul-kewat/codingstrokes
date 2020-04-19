<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

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
<<<<<<< HEAD
        $articles = Article::with('author','tagDetails')->orderBy('created_at','DESC')->get();
        return view('home',compact('articles'));
        
=======
        $articles = Article::all();
        
        return view('home',compact('articles'));
>>>>>>> 288c2cab575d4a8f6fc86da01d9f4063a88ac67e
    }
}
