<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\StoreChatMassage;
use App\Models\ChatMessage;
use GuzzleHttp\Psr7\Message;

class ChatMessageController extends Controller
{
    public function storeMessage(Request $request){
        $message = ChatMessage::create([
            'user_id'=> $request->user_id,
            'text'=> $request->text
        ]);
        broadcast(new StoreChatMassage($message->load('user')));
        return $message;
    }
    public function getmessage()
    {
        $messages = ChatMessage::with('user')->get();
        return $messages;
    }
}
