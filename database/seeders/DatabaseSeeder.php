<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Footer;
use App\Models\LawyerBlog;
use App\Models\LandingPage;
use Illuminate\Support\Str;
use App\Models\LawyerDetail;
use App\Models\LawyerExpertise;
use Illuminate\Database\Seeder;
use Database\Seeders\MailSeeder;
use Database\Seeders\OptionSeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $seeders = [
            InitialSeeder::class
            // UserSeeder::class,
            // LawyerDetailSeeder::class,
            // LawyerBlogSeeder::class,
            // LawyerMailSeeder::class,
            // MailSeeder::class,
            // FaqSeeder::class,
            // ListExpertiseSeeder::class,
            // LawyerExpertiseSeeder::class,
            // OptionSeeder::class,
        ];

        $this->call($seeders);
    }
}
