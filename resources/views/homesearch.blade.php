@extends('layouts.app')


@section('title')
    Search | Codingstrokes
@endsection

@section('content')
<div class="container">
    <div class="center-screen">
        <div class="homeSearchText">
            <blockquote class="blockquote text-center text-success">
                <p>{!! $dailyquote->blockquote !!}</p>
                <footer class="blockquote-footer"><cite title="The Greek Way">{!! $dailyquote->blockquote_cite !!}</cite></footer>
            </blockquote>
        </div>
        <br>
        <form class="form-inline row" method="GET" action="/search">
            
            <div class="form-group">
                <select class="form-control mb-2 mr-sm-2" id="category" name="category">
                    <option>Articles</option>
                    <option>Error Codes</option>
                    <option>Tutorials</option>
                </select>
            </div>
            <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Enter keyword" id="search_text" name="search_text">
            <button type="submit" class="btn btn-success mb-2">Search</button>
        </form>
        
        <a href="/home"> <i class="fa fa-dashboard" style="color:green"></i> Continue without search</a>
    </div>
</div>
@endsection
