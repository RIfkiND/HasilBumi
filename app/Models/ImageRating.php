<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'product_rating_id',
    ];

    public function rating(){
        return $this->belongsTo(ProductRating::class);
    }
}
