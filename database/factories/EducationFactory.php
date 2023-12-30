<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
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
            'school_name'=>$this->faker->name,
            'school_location'=>$this->faker->name,
            'degree'=>$this->faker->name,
            'field_of_study'=>$this->faker->name,
            'graduation_start_date'=>Carbon::now(),
            'graduation_end_date'=>Carbon::now(),
        ];
    }
}
