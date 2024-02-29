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
        return Inertia::render('Component/Body/chat');
    }

    public function broadcast(Request $request)
    {

    //    $message = Message::create([
    //         'message'=> $request->input('message'),
    //     ]);

        broadcast(new ChatBoxEvents($request->get('message')))->toOthers();
        return Inertia::render('Component/Body/chat', ['message' => $request->get('message')]);
    }

    public function receive(Request $request)
    {
        return Inertia::render('Component/Body/components/Receive', ['message' => $request->get('message')]);
    }
}
