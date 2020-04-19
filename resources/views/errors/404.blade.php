@extends('layouts.app')


@section('title')
    Page Not Found
@endsection

@section('content')
<div class="container">
    <div class="jumbotron bg-white">
        <div class="row">
            <div class="col-sm-5">
                <img src="{!! asset('images/404_page_image.png')!!}" style="height: 350px;">
            </div>
            <div class="col-sm-7">
                <h4>Oops!! You have landed in the 404 area</h4>
                <br>
                <p>
                    The HTTP error 404 error means that the page you are trying to open could not be found on the server.
                    In other words, this means that there is no web page corresponding to the entered URL.<br><br>
                    The error message may appear as follows:
                    <ul>
                        <li>"Error 404"</li>
                        <li>"404 not found"</li>
                        <li>"The requested URL was not found on the server."</li>
                        <li>"HTTP Error 404"</li>
                        <li>"Error 404: page not found"</li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection