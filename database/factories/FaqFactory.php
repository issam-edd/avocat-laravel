<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faq>
 */
class FaqFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "lawyer_id" => $this->faker->numberBetween($min = 2, $max = 10),
            "question_fr" => $this->faker->regexify('[A-Za-z0-9]{20}'),
            "question_ar" => $this->faker->regexify('[\u0621-\u064A]{20}'),
            "answer_fr" => $this->faker->regexify('[A-Za-z0-9]{20}'),
            "answer_ar" => $this->faker->regexify('[\u0621-\u064A]{20}'),
        ];
    }
}
