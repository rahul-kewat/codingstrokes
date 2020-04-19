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
        // $this->middleware('auth');
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
    }
}
