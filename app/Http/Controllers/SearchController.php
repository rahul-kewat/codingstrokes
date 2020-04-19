<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Validator;
use Session;

class SearchController extends Controller
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
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required|string',
            'search_text' => 'required|string',
            'page' => 'integer'
        ]);
         
        if ($validator->fails()) {
             Session::flash('error', $validator->messages()->first());
             return redirect()->back()->withInput();
        }
        
        $string = $request['search_text'];

        // split on 1+ whitespace & ignore empty (eg. trailing space)
        $searchValues = preg_split('/\s+/', $string, -1, PREG_SPLIT_NO_EMPTY); 

        $articles = Article::with('author','tagDetails')->where(function ($q) use ($searchValues) {
            foreach ($searchValues as $value) {
                $q->orWhere('title', 'like', "%{$value}%");
            }
        })->orderBy('created_at','DESC')->get();
        
        return view('searchResult',compact('articles'));
        
    }
}
