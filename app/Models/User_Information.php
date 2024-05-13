<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Information extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'avatar',
        'phone_number',
        'First_name',
        'Last_name',
        'Jenis_kelamin',
        'tanggal_lahir',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date', 
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
