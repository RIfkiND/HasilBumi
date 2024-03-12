<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Seller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seller>
 */
class SellerFactory extends Factory
{
    
    protected static ?string $password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     */
    public function definition(): array
    {
        return [
            'name' =>  fake()->name(),
            'email' =>fake()->unique()->safeEmail(),
            'location' => fake()->city(),
            'logo' => null, // If you want to generate random images, you can use $this->faker->image() method
            'description' =>  fake()->text(),
            'Phone_number' => fake()->phoneNumber(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
