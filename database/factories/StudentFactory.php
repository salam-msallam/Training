<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 1. Remove the nested brackets [ ]
            // 2. Add ->date() to get a string instead of the Generator object
            'birthday' => fake()->date(), 
            'user_id'  => User::factory(),
        ];
    }
}
