<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'CUST_NAME' => fake()->name(),
            'CUST_CITY' => fake()->city(),
            'WORKING_AREA' => "test",
            'PHONE_NO' => $this->faker->phoneNumber(),
            'CUST_COUNTRY' =>  $this->faker->country(),
            'AGENT_CODE' => $this->faker->numberBetween(1,50),
            'GRADE' => $this->faker->numberBetween(1,50),
            'OPENING_AMT' => $this->faker->numberBetween(10,50),
            'RECEIVE_AMT' => $this->faker->numberBetween(100,500),
            'PAYMENT_AMT' => $this->faker->numberBetween(1000,8000),
            'OUTSTANDING_AMT' => $this->faker->numberBetween(1,50),
        ];
    }


}
