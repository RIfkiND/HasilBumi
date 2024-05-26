<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'sender_id',
        'receiver_id'
    ];

    protected $appends = ['time_ago'];

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    public function getTimeAgoAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public static function getMessagesQueryBetweenTwoUsers($request, $sender_id, $receiver_id)
    {
        $query = self::with(['sender', 'receiver'])->where(function($q) use($request, $sender_id, $receiver_id) {
            $q->where(function($sub) use ($sender_id, $receiver_id) {
                $sub->where('sender_id', $sender_id)
                    ->where('receiver_id', $receiver_id);
            })
             ->orWhere(function($sub) use ($sender_id, $receiver_id) {
                 $sub->where('receiver_id', $sender_id)
                     ->where('sender_id', $receiver_id);
             });
        });

        return $query;
    }
}
