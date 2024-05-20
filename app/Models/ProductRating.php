<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRating extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'product_id',
        'comments',
        'star_ratings',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function rtaing_image(){
        return $this->hasMany(ProductRatingsImage::class);
    }
}