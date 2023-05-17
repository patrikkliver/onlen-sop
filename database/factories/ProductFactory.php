<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => Str::random(10),
            'price' => rand(100000, 5000000),
            'stock' => rand(20, 100),
            'description' => Str::random(30),
            'category_id' => rand(1, 10)
        ];
    }
}
