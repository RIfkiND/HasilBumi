<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\satuan;
class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $units = [
            ['satuan' => 'Kilogram', 'symbol' => 'Kg'],
            ['satuan' => 'Gram', 'symbol' => 'g'],
            ['satuan' => 'Ton', 'symbol' => 'ton'],
            ['satuan' => 'Pound', 'symbol' => 'lb'],
            ['satuan' => 'Ounce', 'symbol' => 'oz'],
            ['satuan' => 'Stone', 'symbol' => 'st'],
            ['satuan' => 'Quintal', 'symbol' => 'q'],
            ['satuan' => 'Carat', 'symbol' => 'ct'],
            ['satuan' => 'Hundredweight', 'symbol' => 'cwt'],
        
        ];
        foreach ($units as $unit) {
            satuan::create($unit);
        }
    }
}
