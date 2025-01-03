<?php

namespace App\Livewire\Chat;

use Livewire\Component;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class ChatBox extends Component
{
    public $selectedConversation;
    public $body = '';
    public $loadedMessages = [];

    public function mount($selectedConversation)
    {
        $this->selectedConversation = $selectedConversation;
        $this->loadMessages();
    }

    public function loadMessages()
    {
        $this->loadedMessages = Message::where('conversation_id', $this->selectedConversation->id)
            ->latest('created_at')
            ->get();
    }

    public function sendMessage()
    {

        dd($this->body);

        // $this->validate(['body' => 'required|string']);

        // $createdMessage = Message::create([
        //     'conversation_id' => $this->selectedConversation->id,
        //     'sender_id' => Auth::id(),
        //     'receiver_id' => $this->selectedConversation->getReceiver()->id,
        //     'body' => $this->body,
        // ]);

        // $this->reset('body');
        // $this->loadMessages();
    }

    public function render()
    {
        return view('livewire.chat.chat-box');
    }
}
