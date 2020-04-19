<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
<<<<<<< HEAD
        // $this->middleware('auth');
=======
        $this->middleware('auth');
>>>>>>> 288c2cab575d4a8f6fc86da01d9f4063a88ac67e
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
    }
    public function show($tag,$id,$slug)
    {
<<<<<<< HEAD
        try{
            $article = Article::find($id);
            $article->views = $article->views +1;
            $article->save(); 
            $article->tag = $tag; // replacing tag with tag_name from the url 
            return view('Article.showArticle',compact('article'));
        }
        catch(\Exception $ex){
            return redirect('page.not.found');
        }
=======
        
        $article = Article::find($id);
        $article->views = $article->views +1;
        $article->save(); 
        $article->tag = $tag; // replacing tag with tag_name from the url 
        return view('Article.showArticle',compact('article'));
>>>>>>> 288c2cab575d4a8f6fc86da01d9f4063a88ac67e
    }
}
