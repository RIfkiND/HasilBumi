<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'seller_id' => \App\Models\Seller::factory(),
            'Harga' => $this->faker->numberBetween(100, 1000),
            'stock' => $this->faker->numberBetween(0, 100),
            'deskripsi' => fake()->sentence(),
            'category_id' => \App\Models\Category::factory()->create()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
