<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuizItem>
 */
class QuizItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'photo_name' => null,
            'question' => fake()->paragraph(),
            'answer_a' => fake()->sentence(),
            'answer_b' => fake()->sentence(),
            'answer_c' => fake()->sentence(),
            'answer_d' => fake()->sentence(),
            'correct_answer' => fake()->randomElement(['a', 'b', 'c', 'd'])
            //
        ];
    }
}
