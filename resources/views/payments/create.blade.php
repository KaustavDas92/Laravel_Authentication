@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-8">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                <form method="POST" action="/payments">
                    @csrf
                    <div>
                        <button type="submit" class="btn btn-primary" >
                            Make Payment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
