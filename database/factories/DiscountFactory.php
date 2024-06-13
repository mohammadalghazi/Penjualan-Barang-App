<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discount>
 */
class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(mt_rand(2, 8)),
            'type' => "fixed",
            'rules' => json_encode([
                'minimum_purchase' => $this->faker->numberBetween(50, 500),
                'applicable_products' => Arr::random(['product1', 'product2', 'product3']),
            ]),
            'availability' => $this->faker->numberBetween(0, 100),
            'is_global' => false,
            'started_at' => Carbon::now(),
            'expired_at' => Carbon::now()->addDays(30),
        ];
    }
}
