<?php

namespace App\Events;

use App\Models\Message;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChatBoxEvents implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;



    public string $message;
    public int $userId;
    public int $sellerId;
    public function __construct(string $message, int $userId, int $sellerId)
    {
        $this->message = $message;
        $this->userId = $userId;
        $this->sellerId = $sellerId;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('chat.' . $this->userId . '.' . $this->sellerId);
    }
    public function broadcastWith()
    {
        return [
            'message' => $this->message,
            'userId' => $this->userId,
            'sellerId' => $this->sellerId,
        ];
    }
   
}
