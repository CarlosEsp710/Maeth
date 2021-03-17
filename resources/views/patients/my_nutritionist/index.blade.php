@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>L.N. {{ $nutritionist->user->name }}</h1>
        <div class="row">
            <div class="col-md-4">
                <p>{{ $nutritionist->description }}</p>
                <a href="{{ route('my_nutritionist.show', $nutritionist->id) }}" class="btn btn-link">Ver perfil</a>
                @livewire('chat-form', ['conversation_id' => $conversation->id], key($conversation->id))
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista de mensajes</div>
                    <div class="card-body">
                        @livewire('chat-list', ['conversation_id' => $conversation->id], key($conversation->id))
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
