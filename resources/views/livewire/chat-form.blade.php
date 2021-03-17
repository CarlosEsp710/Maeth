<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="form-group">
        <label for="message">Mensaje:</label>
        <input type="text" class="form-control" id="message" wire:model="message">
        @error('message')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <button class="btn btn-sm btn-primary" wire:click="sendMessage">Enviar mensaje</button>
</div>

<div style="position: absolute; top: 10px; right: 10px;" class="alert alert-success collapse mt-3" role="alert"
    id="sendSuccess">
    Se ha envido el mensaje
</div>

<script>
    window.livewire.on('mensajeEnviado', function() {
        $("#sendSuccess").fadeIn("slow");
        setTimeout(function() {
            $("#sendSuccess").fadeOut("slow");
        }, 3000);
    });

</script>
