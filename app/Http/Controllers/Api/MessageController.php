<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\SendMessageEvents;
use Inertia\Inertia;
use Symfony\Component\httpFoundation\Response;
use Illuminate\Support\Facades\Event;
use App\Models\User;
use App\Models\Message;


class MessageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        $conversation = Conversation::findOrFail($conversationId);
        $message = $conversation->messages()->create([
            'user_id' => Auth::id(),
            'message' => $request->message,
        ]);

        broadcast(new MessageSent($message))->toOthers();

        return back();
    }

    public function index()
    {
        $conversations = Conversation::with('users')->get();
        return Inertia::render('Conversations/Index', compact('conversations'));
    }

    public function show($id)
    {
        $conversation = Conversation::with('messages.user')->findOrFail($id);
        return Inertia::render('Conversations/Show', compact('conversation'));
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'user_id' => 'required|array',
            'user_id.*' => 'exists:users,id',
        ]);

        $conversation = Conversation::create();
        $conversation->users()->attach($request->user_ids);

        return redirect()->route('conversations.show', $conversation->id);
    }
    }




