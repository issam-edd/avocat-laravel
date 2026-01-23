<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $password = Hash::make('user');

        $users = [
            [
                'first_name' => 'Icf',
                'last_name' => 'Admin',
                'email' => 'icf@gmail.com',
                'profile_image' => '',
                'password' => Hash::make('admin'),
                'role' => '1'
            ],
            [
                'first_name' => 'Mohamed',
                'last_name' => 'Ahmed',
                'email' => 'mohamed.ahmed@example.com',
                'profile_image' => 'images/users/mohamed.png',
                'password' => $password,
            ],
            [
                'first_name' => 'Ahmed',
                'last_name' => 'Benali',
                'email' => 'ahmed.benali@example.com',
                'profile_image' => 'images/users/ahmed.png',
                'password' => $password,
            ],
            [
                'first_name' => 'Ahmed',
                'last_name' => 'Khalid',
                'email' => 'mohammed.bashir@example.com',
                'profile_image' => 'images/users/mohammed.png',
                'password' => $password,
            ],
            [
                'first_name' => 'Ismail',
                'last_name' => 'Gharaf',
                'email' => 'rana.ibrahim@example.com',
                'profile_image' => 'images/users/rana.png',
                'password' => $password,
            ],
            [
                'first_name' => 'Yassine',
                'last_name' => 'El Aatmani',
                'email' => 'rana.ibrahim@example.com',
                'profile_image' => 'images/users/rana.png',
                'password' => $password,
            ],
            ];

        DB::table('users')->insert($users);
        
    }
}
