<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageMassage extends Model
{
    use HasFactory;
    protected $fillable =[
        'url'
    ];

    public function message(){
        return $this->belongsTo(Message::class);
    }
}
