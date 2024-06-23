<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Cashier\Billable;
class User extends Authenticatable
{
    use Billable ,HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar_user',  
        'tgl_lahir',
        'jenis_kelamin',
        'no_hp',
        'alamat',
        'is_online',
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
        'is_online' => 'boolean',

    ];


    public function whistlist(){
        return $this->hasMany(Whistlist::class );
    }
    public function cart(){
        return $this->hasMany(Cart::class);
    }

    public function seller(){
        return $this->hasOne(Seller_Information::class);
    }
    public function isSeller()
    {

        return $this->seller()->exists();
    }

    public function totalWhislist(){
        return $this->whistlist()->count();
    } public function totalCart(){
        return $this->cart()->count();
    }


}
