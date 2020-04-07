@extends('layouts.app')


@section('title')
    Dashboard - {{ Auth::user()->name }} 
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                @endif
            
            @foreach($articles as $article)
            <div class="media bg-light position-relative " style="border-radius:1%; padding:2%">
                <div class="media-body">
                    <div class="row">
                        <div class="col-sm-1">
                        <img src="https://camo.githubusercontent.com/f60e683c1994c1011fa1418e789a998fb4b161aa/68747470733a2f2f692e696d6775722e636f6d2f5361466a6d65742e706e67" height="15px" class="mr-3" alt="...">
                        <b>Laravel</b>
                        </div>
                        <div class="col-sm-11">
                            <h5 class="mt-0 articleListHeading"><b>{!! $article->title !!}</b></h5>
                            <p class="articleListPara">{!! str_limit($article->content, 200) !!}</p>
                            <a href="{!! $article->urldest !!}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
                <a href='{!! $article->urldest !!}' ><h4></h4></a>
            @endforeach
                
        </div>
    </div>
</div>
@endsection
