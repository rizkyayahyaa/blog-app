<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chatList()
    {
        $users = User::where('id', '!=', auth()->id())->get();
        return view('customers.chat-list', compact('users'));
    }

    public function index($receiverId)
    {
        // Hapus dd($receiverId)
        $receiver = User::findOrFail($receiverId); // Menggunakan findOrFail untuk handling error

        $messages = Message::where(function ($query) use ($receiverId) {
            $query->where('sender_id', auth()->id())
                ->where('receiver_id', $receiverId);
        })
        ->orWhere(function ($query) use ($receiverId) {
            $query->where('sender_id', $receiverId)
                ->where('receiver_id', auth()->id());
        })
        ->with(['sender', 'receiver'])
        ->orderBy('created_at', 'asc')
        ->get();

        return view('customers.customer-chat', compact('messages', 'receiverId', 'receiver'));
    }


    public function sendMessage(Request $request, $receiverId)
    {
        // Validate receiver exists
        $receiver = User::findOrFail($receiverId);

        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        Message::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $receiverId,
            'message' => $request->message,
        ]);

        return redirect()->back();
    }
}
