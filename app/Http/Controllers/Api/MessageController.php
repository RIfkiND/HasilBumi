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
        $message = new Message();
        $message->from = Auth::user()->id;
        $message->to = $request->to;
        $message->content = filter_var($request->content, FILTER_SANITIZE_STRIPPED);
        $message->save();

        // Chamando o evento
        Event::dispatch(new SendMessageEvents($message, $request->to)); 
    }



    public function listMessages(User $user)
    {
        $userFrom = Auth::user()->id; 
        $userTo = $user->id;

       

        $messages = Message::where(
            function($query) use ($userFrom, $userTo) { 
                $query->where([
                    'from' => $userFrom,
                    'to' => $userTo
                ]);
            }
        )->orWhere(
            function($query) use ($userFrom, $userTo) { 
                $query->where([
                    'from' => $userTo,
                    'to' => $userFrom
                ]);
            }
        )->orderBy('created_at','ASC')->get();

        return response()->json([
            'messages' => $messages
        ],Response::HTTP_OK);
    }
}
