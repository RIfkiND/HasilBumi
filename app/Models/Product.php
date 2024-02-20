<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public function image(){
       return $this->hasMany(ImageProduct::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function seller(){
        //return $this->belongsTo();
    }
}
