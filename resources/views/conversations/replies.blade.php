
@foreach ($conversation->replies as $replay)
    <div>

        <header style="display:flex; justify-content: space-between;">
            <p class="m-8"><strong>{{ $replay->user->name }} said...</strong></p>

            @if($replay->isBest())
                <span style="color: green;">Best Reply!!</span>
            @endif

        </header>

        <p class="m-8"><strong>{{ $replay->user->name }} said ...</strong></p>

        {{ $replay->body }}

        @can('update', $conversation)
            <form method="POST" action="/best-replies/{{$replay->id}}">
                @csrf
                <button type="submit"
                        class="btn p-0 text-muted">
                    Best Reply?
                </button>
            </form>
        @endcan

    </div>
    @continue($loop->last)


    <hr>
@endforeach
