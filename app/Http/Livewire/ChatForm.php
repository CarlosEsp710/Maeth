<?php

namespace App\Http\Livewire;

use App\Events\SendMessage;
use App\Models\Message;
use Livewire\Component;

class ChatForm extends Component
{
    public $message, $conversation_id, $data;

    public function mount()
    {
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.chat-form');
    }

    public function sendMessage()
    {
        $this->validate([
            'message' => 'required'
        ]);

        $this->data = Message::create([
            'conversation_id' => $this->conversation_id,
            'user_profile_id' => auth()->user()->id,
            'body' => $this->message
        ]);

        $this->message = "";
        $this->emit('mensajeEnviado');
        $this->emit('mensajeRecibido');

        event(new SendMessage($this->data));
    }
}
