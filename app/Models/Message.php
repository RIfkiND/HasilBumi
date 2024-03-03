<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable=[
        'message',
    ];



    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function image(){
        return $this->hasMany(ImageMassage::class);
    }
}
