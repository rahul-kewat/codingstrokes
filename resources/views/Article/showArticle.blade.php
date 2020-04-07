@extends('layouts.app')

@section('title')
{!! $article->title !!} | [{!! $article->tag !!}]
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                @endif -->
            <h4><span  class="articleHeadingTag">&nbsp; ({!! $article->tag !!}) &nbsp; </span></h4>
            <h1 class="articleHeading"><span>[<i class="fa fa-eye" aria-hidden="true"></i>  {!! $article->views !!}]</span> {!! $article->title !!}</h1>

            <br><br>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-text-material-tab" data-toggle="tab" href="#nav-text-material" role="tab" aria-controls="nav-text-material" aria-selected="true">Text Material</a>
                    <a class="nav-item nav-link" id="nav-video-material-tab" data-toggle="tab" href="#nav-video-material" role="tab" aria-controls="nav-video-material" aria-selected="false">Video Material</a>
                    <a class="nav-item nav-link" id="nav-short-notes-tab" data-toggle="tab" href="#nav-short-notes" role="tab" aria-controls="nav-short-notes" aria-selected="false">Short Notes</a>
                    <a class="nav-item nav-link" id="nav-references-tab" data-toggle="tab" href="#nav-references" role="tab" aria-controls="nav-references" aria-selected="false">References</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-text-material" role="tabpanel" aria-labelledby="nav-home-tab">
                @if($article->content!="")
                    <br>
                    {!! $article->content !!}
                @else
                    <br>
                    <p class="text-center" style="color:rgba(0,0,0,0.4)">No Content available</p>
                @endif
            </div>
            <div class="tab-pane fade" id="nav-video-material" role="tabpanel" aria-labelledby="nav-video-material-tab">
                <video poster="/path/to/poster.jpg" id="player" playsinline controls>
                    <source src="https://www.youtube.com/watch?v=V8_wEZD160g" type="video/mp4" />
                    <source src="https://www.youtube.com/watch?v=V8_wEZD160g" type="video/webm" />
                </video>

            </div>
            <div class="tab-pane fade" id="nav-short-notes" role="tabpanel" aria-labelledby="nav-short-notes-tab">
                @if($article->shortNotes!="")
                    <br>
                    {!! $article->shortNotes !!}
                @else
                    <br>
                    <p class="text-center" style="color:rgba(0,0,0,0.4)">No Short Notes available</p>
                @endif
            </div>
            <div class="tab-pane fade" id="nav-references" role="tabpanel" aria-labelledby="nav-references-tab">
                @if($article->referencesText!="")
                    <br>
                    {!! $article->referencesText !!}
                @else
                    <br>
                    <p class="text-center" style="color:rgba(0,0,0,0.4)">No References available</p>
                @endif
            </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
