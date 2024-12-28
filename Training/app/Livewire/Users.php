<?php

namespace App\Livewire;

use App\Models\Conversation;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Users extends Component
{   

    public function message($userId)
    {
        $authenticatedUserId = Auth::id();

        # Check if conversation already exists
        $existingConversation = Conversation::where(function ($query) use ($authenticatedUserId, $userId) {
            $query->where('sender_id', $authenticatedUserId)
                ->where('receiver_id', $userId);
            })
        ->orWhere(function ($query) use ($authenticatedUserId, $userId) {
            $query->where('sender_id', $userId)
                ->where('receiver_id', $authenticatedUserId);
        })->first();
    
  if ($existingConversation) {
      # Conversation already exists, redirect to existing conversation
      return redirect()->route('chat', ['query' => $existingConversation->id]);
  }

  # Create new conversation
  $createdConversation = Conversation::create([
      'sender_id' => $authenticatedUserId,
      'receiver_id' => $userId,
  ]);

    return redirect()->route('chat', ['query' => $createdConversation->id]);
    }


    public function render()
    {
        return view('livewire.users', [
            'users' => User::where('id', '!=', Auth::id())->get()        
        ]);
    }
}