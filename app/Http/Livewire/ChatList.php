<?php

namespace App\Http\Livewire;

use App\Models\Conversation;
use Livewire\Component;

class ChatList extends Component
{

    public $conversation_id, $conversation, $messages;

    protected $listeners = ['mensajeRecibido'];

    public function mount()
    {
        $this->conversation = Conversation::where('id', $this->conversation_id)->first();
        $this->messages = $this->conversation->messages;
    }

    public function mensajeRecibido()
    {
        $this->messages = $this->conversation->messages;
    }

    public function render()
    {
        return view('livewire.chat-list');
    }
}
