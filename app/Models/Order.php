<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['total_price', 'status', 'session_id', 'user_address_id',  'created_by', 'updated_by'];

    function order_items()  {
        return $this->hasMany(OrderItem::class);
    }

}
