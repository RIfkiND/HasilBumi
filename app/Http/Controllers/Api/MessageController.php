<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\ChatBoxEvents;
use Inertia\Inertia;

use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {

        $messages = Message::orderBy('created_at', 'asc')->get();

        return Inertia::render('Component/Body/chat', compact('messages'));
    }

    public function broadcast(Request $request)
    {
        $validatedData = $request->validate([
            'message' => 'required|string',
            'sender_type' => 'required|in:user,seller',
            'sender_id' => 'required|integer',
            'receiver_type' => 'required|in:user,seller',
            'receiver_id' => 'required|integer',
        ]);

        $messageContent = $validatedData['message'];
        $senderType = $validatedData['sender_type'];
        $senderId = $validatedData['sender_id'];
        $receiverType = $validatedData['receiver_type'];
        $receiverId = $validatedData['receiver_id'];

        
        $message = Message::create([
            'massage' => $messageContent,
            'sender_id' => $senderId,
            'sender_type' => $senderType,
            'receiver_id' => $receiverId,
            'receiver_type' => $receiverType,
        ]);

      
        broadcast(new ChatBoxEvents($messageContent, $senderId, $receiverId));
    }
}
