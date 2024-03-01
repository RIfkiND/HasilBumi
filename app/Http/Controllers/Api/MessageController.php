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
        // Fetch messages from the database
        $messages = Message::orderBy('created_at', 'asc')->get();

        return Inertia::render('Component/Body/chat', compact('messages'));
    }

    public function broadcast(Request $request)
    {
        $user = Auth::user(); 


        $message = new Message();
        $message->user_id = $user->id;
        $message->message = $request->input('message');
        $message->save();


        broadcast(new ChatBoxEvents($message))->toOthers();
    }
}
