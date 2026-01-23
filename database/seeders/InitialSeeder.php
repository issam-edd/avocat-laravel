<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\LawyerExpertise;
use Illuminate\Database\Seeder;
use Database\Seeders\MailSeeder;
use Database\Seeders\OptionSeeder;

class InitialSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UserSeeder::class,
            LawyerDetailSeeder::class,
            LawyerBlogSeeder::class,
            FaqSeeder::class,
            ModelSeeder::class,
            OptionSeeder::class,
            TestLawyer::class,
            AvocacySeeder::class,
        ]);
    }
}
