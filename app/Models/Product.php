<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller__information_id',
        'name',
        'price',
        'stock',
        'category_id',
        'deskripsi',
        'satuan_id',
    ];
    

    public function product_image(){
       return $this->hasMany(ImageProduct::class);
    }
    
    public function satuan (){
        return $this->belongsTo(Satuan::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    //logika

 


}
