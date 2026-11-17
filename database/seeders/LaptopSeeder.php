<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Laptop;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Laptop::create([
            'brand' => 'Lenovo',
            'model' => 'ThinkPad X1 Carbon',
            'processor' => 'Intel Core i7-1355U',
            'ram' => 16,
        ]);

        Laptop::create([
            'brand' => 'MSI',
            'model' => 'Katana 15',
            'processor' => 'Intel Core i7-13620H',
            'ram' => 16,
        ]);

        Laptop::create([
            'brand' => 'Apple',
            'model' => 'MacBook Pro M3',
            'processor' => 'Apple M3 Pro',
            'ram' => 18,
        ]);
    }
}