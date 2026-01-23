<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LawyerBlog>
 */
class LawyerBlogFactory extends Factory
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
            "title" => $this->faker->title(),
            "body" => $this->faker->regexify('[A-Za-z0-9]{20}'),
            "image_link" => $this->faker->imageUrl(),
            "is_published" => 1 ,
            "is_approved" => 1 ,
        ];
    }
}
