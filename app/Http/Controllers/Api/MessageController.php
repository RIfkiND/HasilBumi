<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\SendMessage;
use Inertia\Inertia;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class MessageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function ChatWithOtherUser($id){

        $users = User::with('seller')->where('name', $id)->first();

        if (!$users) {

            return Redirect::back()->with('error', 'User No Found');
        }

        return Inertia::render('', [
            'users' => $users,
        ]);

        
    }
    public function messages(){

        $messages = Message::with('user')->get();
       return response()->json($messages);
    }

    public function messageStore(Request $request){
        $user = Auth::user();
        $messages = $user->messages()->create([
            'message' => $request->message
        ]);
        broadcast(new SendMessage($user, $messages))->toOthers();
        return 'message sent';
    }
}
