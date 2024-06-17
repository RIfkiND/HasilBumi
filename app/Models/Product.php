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
    


    public function seller(){
     return $this->belongsTo(Seller_Information::class, 'seller__information_id');
    }
    public function product_image(){
       return $this->hasMany(ImageProduct::class);
    }
    public function first_image()
    {
        return $this->hasOne(imageProduct::class)->oldestOfMany();
    }
    public function satuan (){
        return $this->belongsTo(Satuan::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }


    //logika

 


}
