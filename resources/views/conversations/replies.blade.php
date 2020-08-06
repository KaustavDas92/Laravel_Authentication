
<div class="container">
    @foreach($conversation->replies as $reply)
        <div>
            <header style="display: flex; justify-content: space-between">
                 <p class="m-0"><strong>{{$reply->user->name}} said..</strong></p>

                @if($conversation->best_reply_id === $reply->id)
                    <span style="color: green;">Best Reply!!</span>
                @endif
            </header>
            {{$reply->body}}
           @can('update',$conversation) <!-- can is the tag which ensures authorization -->
                <form method="POST" action="/best-replies/{{$reply->id}}">
                    @csrf
                    <button type="submit" class="btn p-0 text-muted">best reply?</button>
                </form>
            @endcan
        </div>
        @continue($loop->last)
        <hr>
    @endforeach
</div>
