<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {


        return [
            'AGENT_NAME' => fake()->name(),
            'WORKING_AREA' => fake()->unique()->safeEmail(),
            'PHONE_NO' => $this->faker->phoneNumber(),
            'COUNTRY' =>  $this->faker->country(),
            'COMMISSION' => $this->faker->numberBetween(50,100),
        ];
    }


}
