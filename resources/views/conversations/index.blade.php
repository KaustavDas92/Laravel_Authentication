@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-8">
             @foreach($conversation as $convo)
             <h2><a href="/conversations/{{$convo->id}}">{{$convo->Title}}</a></h2>
                @continue($loop->last)

                <hr>
             @endforeach
            </div>
        </div>
    </div>
@endsection
