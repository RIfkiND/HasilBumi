<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Seller_Information extends Model
{
    use HasFactory;


    protected $table = 'Seller_Information';
    protected $guarded = ['id'];
    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'nama_toko',
        'no_telp_toko',
        'kota',
        'provinsi',
        'kode_pos',
        'foto_ktp',
        'foto_sendiri'
    ];
    

    public function UserSeller(){
        return $this->belongsTo(User::class);
    }
    public function product(){
        return $this->hasMany(Product::class);
    }
}
