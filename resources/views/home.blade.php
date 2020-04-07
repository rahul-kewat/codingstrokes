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
            <h3>We are currently in development phase. Please give us some time. Till then enjoy the articles below</h3><br>
            <h5>Latest Articles :</h5> <br><br>
            
            @foreach($articles as $article)
                <a href='{!! $article->urldest !!}' ><h4>{!! $article->title !!}</h4></a>
            @endforeach
                
        </div>
    </div>
</div>
@endsection
