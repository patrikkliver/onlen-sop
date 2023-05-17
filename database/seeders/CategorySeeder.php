<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Storage Device'],
            ['name' => 'Audio Device'],
            ['name' => 'Tablet'],
            ['name' => 'Laptop'],
            ['name' => 'Smartphone'],
            ['name' => 'Mouse'],
            ['name' => 'Camera'],
            ['name' => 'Game Console'],
            ['name' => 'Wearable'],
        ];

        foreach ($categories as $category) {
            Category::factory()->create($category);
        }
    }
}
