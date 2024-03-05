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


    public function sender()
    {
        return $this->morphTo();
    }

    
    public function receiver()
    {
        return $this->morphTo();
    }

    public function image(){
        return $this->hasMany(ImageMassage::class);
    }
}
