<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        'name' => $this->faker->word(), // Tên sản phẩm ngẫu nhiên
        'price' => $this->faker->numberBetween(100000, 10000000), // Giá từ 100k đến 10tr
        'quantity' => $this->faker->numberBetween(1, 50), // Số lượng ngẫu nhiên
    ];
    }
}
