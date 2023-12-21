<?php

namespace Database\Factories;

use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grades>
 */
class GradesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject_id' =>  Subject::inRandomOrder()->first()->id,
            'user_id' =>  User::inRandomOrder()->first()->id,
            'marks' => $this->faker->numberBetween(0, 100),
        ];
    }
}
