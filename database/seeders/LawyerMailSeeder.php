<?php

namespace Database\Seeders;

use App\Models\LawyerMail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LawyerMailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        LawyerMail::factory()->count(100)->create();

    }
}
