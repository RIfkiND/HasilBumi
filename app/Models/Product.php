<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function image(){
       return $this->hasMany(ImageProduct::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

   
}
