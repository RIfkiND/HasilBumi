<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Meat'],
            ['name' => 'Vegetable'],
            ['name' => 'Fruits'],
            ['name' => 'Forest'],
            ['name' => 'Grain'],
            ['name' => 'Industri'],
            ['name' => 'Ship'],
            ['name' => 'Processed'],
            ['name' => 'Spice'],
            ['name' => 'Textile'],
         
        ];

 
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
