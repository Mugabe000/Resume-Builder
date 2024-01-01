<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserDetail>
 */
class UserDetailFactory extends Factory
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
            'fullname'=>$this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone'=>fake()->unique()->e164PhoneNumber(),
            'address'=>$this->faker->words(1,true),
            'summary'=>$this->faker->sentence(80),
            'image_path'=>$this->faker->image(public_path('images'), 500, 500, null, false)
        ];
    }
}
