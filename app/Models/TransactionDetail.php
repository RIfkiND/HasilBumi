<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'transaction_id',
        'username',
        'nationality',
        'is_visa',
        'doe_passport'
    ];

    protected $hidden = [];

    public function transation()
    {
        return $this->belongsTo(Transaction::class);
    }
}
