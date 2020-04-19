@extends('layouts.app')

@section('title')
{!! $user->name !!} 
@endsection

@section('content')

<div class="container">
    <div class="row ">
        <div class="col-sm-2 col-md-2 userProfilePhoto">
                <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                @endif -->
                <img src="{!! $user->profile_photo !!}" alt="{!! $user->name !!}">
        </div>
        <div class="col-sm-6 col-md-6 userProfile">
            <br>
            <strong>{!! $user->name !!}</strong><br>
            <!-- Calculating age -->
            <strong>{!!  $years = floor(abs(strtotime($user->date_of_birth) - strtotime(now())) / (365*60*60*24));  !!}</strong><br>
            <strong>@if ($user->gender == 0)
                        {!! 'Male' !!}
                    @elseif ($user->gender == 1)
                        {!! 'Female' !!}
                    @else
                        {!! 'Other' !!}
                    @endif
            </strong><br>
            <strong>{!! $user->email !!}</strong><br>
        </div>
    </div>
</div>
@endsection
