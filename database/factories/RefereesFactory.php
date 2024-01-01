<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Referees>
 */
class RefereesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>1,
            'title'=>$this->faker->jobTitle(),
            'refname'=> $this->faker->name,
            'phone'=>fake()->unique()->e164PhoneNumber(),
            'email'=> $this->faker->unique()->safeEmail(),
        ];
    }
}
