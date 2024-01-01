<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
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
            'job_title'=>$this->faker->jobTitle(),
            'employer'=>$this->faker->company(),
            'city'=>$this->faker->city(),
            'state'=>$this->faker->country(),
            'achievement'=>$this->faker->paragraph(),
            'start_date'=>Carbon::now(),
            'end_date'=>Carbon::now()

        ];
    }
}
