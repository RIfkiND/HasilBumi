<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['cart_id', 'price_ids', 'status'];

    protected $casts = [
        'price_ids' => 'array', // Casts price_ids to an array
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
