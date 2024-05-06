<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Seller extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;


    protected $guard = 'seller';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'location',
        'logo',
        'description',
        'password',
    ];



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function sentMessages()
{
    return $this->morphMany(Message::class, 'sender_id');
}

public function receivedMessages()
{
    return $this->morphMany(Message::class, 'receiver_id');
}

public function SellerInfromation(){
    return $this->hasOne(Seller_Information::class);
}
}
