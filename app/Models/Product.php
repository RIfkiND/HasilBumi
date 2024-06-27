<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
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
        return $this->belongsTo(Category::class,'category_id') ;
    }

    public function comments()  {
        return $this->hasMany(ProductRating::class);
    }

    public function totalUlasan(){
        return $this->comments()->count();
    }
    //logika filter
    public function scopeFiltered(Builder $query){
        return $query
            ->when(request('categories'), function (Builder $q) {
                $q->whereIn('category_id', request('categories'));
            })
            ->when(request('satuans'), function (Builder $q) {
                $q->whereIn('satuan_id', request('satuans'));
            })
            ->when(request('prices'), function (Builder $q) {
                $q->whereBetween('price', [
                    request('prices.from', 0),
                    request('prices.to', 100000),
                ]);
            });
    }




}
