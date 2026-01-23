<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LawyerDetail>
 */
class LawyerDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $nom = Str::replace('-', ' ',$this->faker->name());
        $prenom = Str::replace('-', ' ',$this->faker->lastName());
        $slug = $nom ."-". $prenom . "-" . time();

        static $number = 1;
        return [
            "lawyer_id" => $number++,
            "slug" => $slug,
            "prenom_ar" => $this->faker->name(),
            "nom_ar" => $this->faker->lastName(),
            "phone_number" => $this->faker->phoneNumber(),
            "is_premium" => "0",
            "bio_ar" => $this->faker->regexify('[\u0621-\u064A]{20}'),
            "bio_fr" => $this->faker->regexify('[A-Za-z0-9]{20}'),
            "google_maps_link" => $this->faker->regexify('[A-Za-z0-9]{20}'),
            "whatsapp_link" => $this->faker->regexify('[A-Za-z0-9]{20}'),
            "linkedin_link" => $this->faker->regexify('[A-Za-z0-9]{20}')
        ];
    }
}
