<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductRatingsImage extends Model
{
    use HasFactory;


    protected $fillable = [
        'url'
    ];

    public function rating(){
        return $this->belongsTo(ProductRating::class);
    }
}

