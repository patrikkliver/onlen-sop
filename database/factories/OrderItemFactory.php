<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => rand(1, 15),
            'product_id' => rand(1, 30),
            'quantity' => rand(2, 6),
            'price_per_item' => rand(500000, 2000000)
        ];
    }
}
