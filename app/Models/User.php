<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
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


    public function messages(){
        return $this->hasMany(Message::class);
    }

    public function User_Infromation(){

        return $this->hasOne(User_Infromation::class);
    }

    public function whistlist(){
        return $this->hasMany(Whistlist::class );
    }
    public function cart(){
        return $this->hasMany(Cart::class);
    }

    public function seller(){
        return $this->hasOne(Seller::class);
    }

    public function isSeller()
    {

        return $this->seller()->exists();
    }


}
