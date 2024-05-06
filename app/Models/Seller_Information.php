<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller_Information extends Model
{
    use HasFactory;


    public function seller(){
        return $this->belongsTo(Seller::class);
    }
}
