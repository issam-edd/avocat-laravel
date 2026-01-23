<?php

namespace Database\Seeders;

use App\Models\Mail;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Mail::factory()->count(100)->create();
    }
}
