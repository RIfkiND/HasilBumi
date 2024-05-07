<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller_Information extends Model
{
    use HasFactory;


    protected $table = 'Seller_Information';
    protected $guarded = ['id'];
    protected $fillable = [
        'no_hp',
        'nama_toko',
        'nip',
        'kota',
        'provinsi',
        'kode_pos',
        'foto_toko'
    ];

    public function seller(){
        return $this->belongsTo(Seller::class);
    }
}
