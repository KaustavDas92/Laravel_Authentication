@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-8">
                <p><a href="/conversations">back</a></p>
                <h1>{{$conversation->Title}}</h1>
                <p class="text-muted">Posted By: {{$conversation->user->name}} </p>
                <p>{{$conversation->body}}</p>

                <hr>
            </div>
        </div>
    </div>
    @include('conversations.replies')
@endsection
