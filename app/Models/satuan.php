<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class satuan extends Model
{
    use HasFactory;

    protected $fillable= [
        'satuan',
        'symbol'
    ];

    public function product(){
        return $this->hasMany(Product::class);
    }
}
