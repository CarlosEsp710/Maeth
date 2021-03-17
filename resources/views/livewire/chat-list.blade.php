<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    @foreach ($messages as $message)
        @if ($message->user_profile_id == auth()->user()->id)
            <div class="alert alert-success" role="alert">
                {{ $message->body }}
            </div>
        @else
            <div class="alert alert-warning" role="alert">
                {{ $message->body }}
            </div>
        @endif
    @endforeach
</div>

<script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('75fcaa404af102b70797', {
        cluster: 'mt1'
    });

    var channel = pusher.subscribe('chat-channel');
    channel.bind('chat-event', function(data) {
        //alert(JSON.stringify(data));
        window.livewire.emit('mensajeRecibido', data);
    });

</script>
