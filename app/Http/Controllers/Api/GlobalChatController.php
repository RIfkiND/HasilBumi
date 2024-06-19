<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\MessageSent;
use App\Models\User;
use App\Repositories\ChatRepository;

use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class GlobalChatController extends Controller
{
    public function __construct(private ChatRepository $chat)
    {
        $this->chat = $chat;
    }

    /**
     * Fetch chat messages for a user.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function fetchMessages(Request $request, int $receiverId)
    {
        $messages = $this->chat->getUserMessages((int) $request->user()->id, $receiverId);
        return response()->json(['messages' => $messages]);
    }

    /**
     * Store a new chat message.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request, int $receiverId)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        if (empty($receiverId)) {
            return response()->json(['error' => 'Receiver ID is required'], 400);
        }

        try {
            $message = $this->chat->sendMessage([
                'sender_id' => (int) $request->user()->id,
                'receiver_id' => $receiverId,
                'message' => $request->message,
            ]);

            event(new MessageSent($message));

            return response()->json(['message' => 'Message sent successfully']);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Failed to send message'], 500);
        }
    }
}
