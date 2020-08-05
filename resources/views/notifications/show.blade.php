@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-8">

                <ul>

                        @forelse($notification as $nots)
                        <li>
                            @if($nots->type==='App\Notifications\PaymentReceived')
                                Payment of Rs. {{$nots->data['amount']}} Received
                            @endif
                        </li>
                    @empty
                            You have no Unread notifications
                        @endforelse

                </ul>

            </div>
        </div>
    </div>
@endsection
