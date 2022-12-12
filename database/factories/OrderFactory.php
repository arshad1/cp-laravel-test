<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'CUST_NAME' => fake()->name(),
            'ORD_AMOUNT' => fake()->numberBetween(1000,8000),
            'ADVANCE_AMOUNT' => fake()->numberBetween(100,1000),
            'ORD_DATE' => fake()->date(),
            "CUST_CODE" => fake()->numberBetween(1, 5000),
            "AGENT_CODE" => 1,
            "ORD_DESCRIPTION" => fake()->realText,
        ];
    }


}
