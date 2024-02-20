<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class ChatMessage extends Model
{
    use HasFactory;


    protected $fillable=[
        'text'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getCreatedAtAttribute($value) {
        return Carbon::parse($value)->diffForHumans();
    }
}
