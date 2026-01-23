<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mail>
 */
class MailFactory extends Factory
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
            "first_name" => $this->faker->name(),
            "last_name" => $this->faker->lastName(),
            "email" => $this->faker->email(),
            "phone_number" => $this->faker->phoneNumber(),
            "address" => $this->faker->address(),
            "body" => $this->faker->regexify('[A-Za-z\s]{20}'),
            "is_read" => 0,
        ];
    }
}
