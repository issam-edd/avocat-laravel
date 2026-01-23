<?php

namespace Database\Seeders;

use App\Models\LandingPage;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // User::truncate();

        // User::factory(10)->create();

        // etape 1
        // User::factory(10)->create();

        // Old Users
        // $users = [
        //     [
        //         'first_name' => "Admin",
        //         'last_name' => "Icf",
        //         'email' => "icfmarrakech@gmail.com",
        //         'email_verified_at' => NULL,
        //         'password' => Hash::make("admin"), // password
        //         'remember_token' => Str::random(10),
        //         'role' => 1
        //     ],
        //     [
        //         'first_name' => "Abbas",
        //         'last_name' => "Fikri",
        //         'email' => "abbas.fikri@gmail.com",
        //         'email_verified_at' => NULL,
        //         'password' => Hash::make("admin"), // password
        //         'remember_token' => Str::random(10),
        //         'profile_image' => 'images/users/lawyer_1.jpg',
        //         'role' => 0
        //     ],
        //     [
        //         'first_name' => "Mohamed",
        //         'last_name' => "Adib",
        //         'email' => "mohamed.adib@gmail.com",
        //         'email_verified_at' => NULL,
        //         'password' => Hash::make("admin"), // password
        //         'remember_token' => Str::random(10),
        //         'profile_image' => 'images/users/lawyer_2.jpeg',
        //         'role' => 0
        //     ],
        //     [
        //         'first_name' => "Mohamed",
        //         'last_name' => "Maaroufi",
        //         'email' => "mohamed.maaroufi@gmail.com",
        //         'email_verified_at' => NULL,
        //         'password' => Hash::make("admin"), // password
        //         'remember_token' => Str::random(10),
        //         'profile_image' => 'images/users/lawyer_3.jpeg',
        //         'role' => 0
        //     ],
        //     [
        //         'first_name' => "Allal",
        //         'last_name' => "Moustari",
        //         'email' => "allal.moustari@gmail.com",
        //         'email_verified_at' => NULL,
        //         'password' => Hash::make("admin"), // password
        //         'remember_token' => Str::random(10),
        //         'profile_image' => 'images/users/lawyer_4.jpeg',
        //         'role' => 0
        //     ],
        //     [
        //         'first_name' => "Nasser",
        //         'last_name' => "Ait Serhan",
        //         'email' => "nasser.ait.serhan@gmail.com",
        //         'email_verified_at' => NULL,
        //         'password' => Hash::make("admin"), // password
        //         'remember_token' => Str::random(10),
        //         'profile_image' => 'images/users/lawyer_5.jpg',
        //         'role' => 0
        //     ],
        //     [
        //         'first_name' => "Abdeljalil",
        //         'last_name' => "Rafia",
        //         'email' => "abdeljalil.rafia@gmail.com",
        //         'email_verified_at' => NULL,
        //         'password' => Hash::make("admin"), // password
        //         'remember_token' => Str::random(10),
        //         'profile_image' => 'images/users/lawyer_1.jpg',
        //         'role' => 0
        //     ],
        //     [
        //         'first_name' => "Idriss",
        //         'last_name' => "Abu Al Fadl",
        //         'email' => "idriss.abulfadl@gmail.com",
        //         'email_verified_at' => NULL,
        //         'password' => Hash::make("admin"), // password
        //         'remember_token' => Str::random(10),
        //         'profile_image' => 'images/users/lawyer_2.jpeg',
        //         'role' => 0
        //     ],
        //     [
        //         'first_name' => "Ibrahim",
        //         'last_name' => "Sadouk",
        //         'email' => "ibrahim.sadouk@gmail.com",
        //         'email_verified_at' => NULL,
        //         'password' => Hash::make("admin"), // password
        //         'remember_token' => Str::random(10),
        //         'profile_image' => 'images/users/lawyer_3.jpeg',
        //         'role' => 0
        //     ],
        //     [
        //         'first_name' => "Mohamed",
        //         'last_name' => "Jalal",
        //         'email' => "mohamed.jalal@gmail.com",
        //         'email_verified_at' => NULL,
        //         'password' => Hash::make("admin"), // password
        //         'remember_token' => Str::random(10),
        //         'profile_image' => 'images/users/lawyer_4.jpeg',
        //         'role' => 0
        //     ],
        //     [
        //         'first_name' => "Ali",
        //         'last_name' => "Wahbi",
        //         'email' => "ali.wahbi@gmail.com",
        //         'email_verified_at' => NULL,
        //         'password' => Hash::make("admin"), // password
        //         'remember_token' => Str::random(10),
        //         'profile_image' => 'images/users/lawyer_5.jpg',
        //         'role' => 0
        //     ],
        //     [
        //         'first_name'=> "RHOLAMI" ,
        //         'last_name'=> "Hamdi" ,
        //         'email'=> "rharrafismail@gmail.com" ,
        //         'email_verified_at' => NULL,
        //         'password' => Hash::make("12345"),
        //         'remember_token' => Str::random(10),
        //         'profile_image' => 'images/users/lawyer_6.jpg',
        //         'role' => 0
        //     ],

        // ];

        // foreach ($users as $user) {
        //     User::create($user);
        // }
        // New Users
        $users = [];
        $users = [
            [
                'first_name' => "Admin",
                'last_name' => "Icf",
                'email' => "icfmarrakech@gmail.com",
                'email_verified_at' => NULL,
                'password' => Hash::make("admin"), // password
                'remember_token' => Str::random(10),
                'role' => 1
            ],
            [
            'first_name'=> 'Tawfiq Ibn Suleiman',
            'last_name'=> 'Tawfiq Ibn Suleiman',
            'email'=> 'avocat2@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abbas Fikri',
            'last_name'=> 'Abbas Fikri',
            'email'=> 'avocat3@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay Ahmed Al Khalifa',
            'last_name'=> 'Moulay Ahmed Al Khalifa',
            'email'=> 'avocat4@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Rahman Takzrin',
            'last_name'=> 'Abdul Rahman Takzrin',
            'email'=> 'avocat5@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Al-Adeeb',
            'last_name'=> 'Muhammad Al-Adeeb',
            'email'=> 'avocat6@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Al-Habib Bonne chance',
            'last_name'=> 'Muhammad Al-Habib Bonne chance',
            'email'=> 'avocat7@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdelhamid Benjelloun',
            'last_name'=> 'Abdelhamid Benjelloun',
            'email'=> 'avocat8@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Al-Maaroufy',
            'last_name'=> 'Mohamed Al-Maaroufy',
            'email'=> 'avocat9@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Belhashmi',
            'last_name'=> 'Muhammad Belhashmi',
            'email'=> 'avocat10@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Bushra Al-Asimi',
            'last_name'=> 'Bushra Al-Asimi',
            'email'=> 'avocat11@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Sadiq Sharkawy',
            'last_name'=> 'Sadiq Sharkawy',
            'email'=> 'avocat12@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Rafi Jawahery',
            'last_name'=> 'Abdul Rafi Jawahery',
            'email'=> 'avocat13@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad al-Idrissi',
            'last_name'=> 'Muhammad al-Idrissi',
            'email'=> 'avocat14@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Rahman Al-Munbihi',
            'last_name'=> 'Abdul Rahman Al-Munbihi',
            'email'=> 'avocat15@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Allal Al-Mastari',
            'last_name'=> 'Allal Al-Mastari',
            'email'=> 'avocat16@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdulaziz Al-Fahli',
            'last_name'=> 'Abdulaziz Al-Fahli',
            'email'=> 'avocat17@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Nasser Aït Sarhan',
            'last_name'=> 'Nasser Aït Sarhan',
            'email'=> 'avocat18@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdallah Rahimi',
            'last_name'=> 'Abdallah Rahimi',
            'email'=> 'avocat19@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'né à travers moi',
            'last_name'=> 'né à travers moi',
            'email'=> 'avocat20@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Jalil Rafi',
            'last_name'=> 'Abdul Jalil Rafi',
            'email'=> 'avocat21@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ali Wehbé',
            'last_name'=> 'Ali Wehbé',
            'email'=> 'avocat22@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Jalal',
            'last_name'=> 'Mohamed Jalal',
            'email'=> 'avocat23@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Omar Mohi',
            'last_name'=> 'Omar Mohi',
            'email'=> 'avocat24@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Saïd Bensalam',
            'last_name'=> 'Mohamed Saïd Bensalam',
            'email'=> 'avocat25@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay Abdel Jalil Mansouri',
            'last_name'=> 'Moulay Abdel Jalil Mansouri',
            'email'=> 'avocat26@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'ʻAbd al-Wahhāb',
            'last_name'=> 'ʻAbd al-Wahhāb',
            'email'=> 'avocat27@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdel Qader Al-Qutib',
            'last_name'=> 'Abdel Qader Al-Qutib',
            'email'=> 'avocat28@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ibrahim Zadok',
            'last_name'=> 'Ibrahim Zadok',
            'email'=> 'avocat29@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Idris Aboul Fadl',
            'last_name'=> 'Idris Aboul Fadl',
            'email'=> 'avocat30@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'L&#39;Arabe est embelli',
            'last_name'=> 'L&#39;Arabe est embelli',
            'email'=> 'avocat31@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Sadiq Aït Maatallah',
            'last_name'=> 'Abdul Sadiq Aït Maatallah',
            'email'=> 'avocat32@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Ghani Al-Karnegui',
            'last_name'=> 'Abdul Ghani Al-Karnegui',
            'email'=> 'avocat33@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Benabd Al Razek',
            'last_name'=> 'Muhammad Benabd Al Razek',
            'email'=> 'avocat34@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'M Ibrahim Al-Idrisi Bahr',
            'last_name'=> 'M Ibrahim Al-Idrisi Bahr',
            'email'=> 'avocat35@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Benbahia',
            'last_name'=> 'Mohamed Benbahia',
            'email'=> 'avocat36@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abd al-Rahman al-Fedriwi',
            'last_name'=> 'Abd al-Rahman al-Fedriwi',
            'email'=> 'avocat37@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Abadrine',
            'last_name'=> 'Ahmed Abadrine',
            'email'=> 'avocat38@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Pullman',
            'last_name'=> 'Mohamed Pullman',
            'email'=> 'avocat39@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohammed est honorable',
            'last_name'=> 'Mohammed est honorable',
            'email'=> 'avocat40@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan Bouhli',
            'last_name'=> 'Hassan Bouhli',
            'email'=> 'avocat41@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay Abdel Aziz Al-Mawdani Al-Alawi',
            'last_name'=> 'Moulay Abdel Aziz Al-Mawdani Al-Alawi',
            'email'=> 'avocat42@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Retenue de Bishara',
            'last_name'=> 'Retenue de Bishara',
            'email'=> 'avocat43@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Saâdi Gandhi',
            'last_name'=> 'Saâdi Gandhi',
            'email'=> 'avocat44@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan m&#39;a honoré',
            'last_name'=> 'Hassan m&#39;a honoré',
            'email'=> 'avocat45@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan Taymour, partenaire de Takzrin et Mohamed Benito',
            'last_name'=> 'Hassan Taymour, partenaire de Takzrin et Mohamed Benito',
            'email'=> 'avocat46@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Jalila Al-Basheri Tawfiq',
            'last_name'=> 'Jalila Al-Basheri Tawfiq',
            'email'=> 'avocat47@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdel Wafi Chraïbi',
            'last_name'=> 'Abdel Wafi Chraïbi',
            'email'=> 'avocat48@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Rahim Hasbi',
            'last_name'=> 'Abdul Rahim Hasbi',
            'email'=> 'avocat49@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Al-Nomani',
            'last_name'=> 'Mohamed Al-Nomani',
            'email'=> 'avocat50@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moubarak Bhutto',
            'last_name'=> 'Moubarak Bhutto',
            'email'=> 'avocat51@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Sadiq Obaïd',
            'last_name'=> 'Abdul Sadiq Obaïd',
            'email'=> 'avocat52@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Omar Abu al-Zuhur',
            'last_name'=> 'Omar Abu al-Zuhur',
            'email'=> 'avocat53@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Al-Hamidi, capitaine',
            'last_name'=> 'Muhammad Al-Hamidi, capitaine',
            'email'=> 'avocat54@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ali Almorabti',
            'last_name'=> 'Ali Almorabti',
            'email'=> 'avocat55@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdel-Gawad Chraïbi',
            'last_name'=> 'Abdel-Gawad Chraïbi',
            'email'=> 'avocat56@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Rahal Hatem',
            'last_name'=> 'Rahal Hatem',
            'email'=> 'avocat57@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Ghani a accepté',
            'last_name'=> 'Abdul Ghani a accepté',
            'email'=> 'avocat58@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Propriétaire Belkeziz',
            'last_name'=> 'Propriétaire Belkeziz',
            'email'=> 'avocat59@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay Hassan Rashidi',
            'last_name'=> 'Moulay Hassan Rashidi',
            'email'=> 'avocat60@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Fadel Belmaachi',
            'last_name'=> 'Mohamed Fadel Belmaachi',
            'email'=> 'avocat61@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Rachid Bellarabi',
            'last_name'=> 'Rachid Bellarabi',
            'email'=> 'avocat62@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Lahcen Aït Belaid',
            'last_name'=> 'Lahcen Aït Belaid',
            'email'=> 'avocat63@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Malik Lahlou',
            'last_name'=> 'Abdul Malik Lahlou',
            'email'=> 'avocat64@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Naïma Ezzo',
            'last_name'=> 'Naïma Ezzo',
            'email'=> 'avocat65@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdulaziz Al-Nathifi',
            'last_name'=> 'Abdulaziz Al-Nathifi',
            'email'=> 'avocat66@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Manabi',
            'last_name'=> 'Ahmed Manabi',
            'email'=> 'avocat67@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdel Fattah Chakir',
            'last_name'=> 'Abdel Fattah Chakir',
            'email'=> 'avocat68@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Jilali Hamoumi',
            'last_name'=> 'Jilali Hamoumi',
            'email'=> 'avocat69@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Wahid Al-Sunhaji',
            'last_name'=> 'Abdul Wahid Al-Sunhaji',
            'email'=> 'avocat70@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Rahim Merci',
            'last_name'=> 'Abdul Rahim Merci',
            'email'=> 'avocat71@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Ahdaida, associé d&#39;Ahnoos',
            'last_name'=> 'Ahmed Ahdaida, associé d&#39;Ahnoos',
            'email'=> 'avocat72@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Embark Ahnoos est partenaire de Hadidah',
            'last_name'=> 'Embark Ahnoos est partenaire de Hadidah',
            'email'=> 'avocat73@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Al-Mustafa Labaytiri',
            'last_name'=> 'Al-Mustafa Labaytiri',
            'email'=> 'avocat74@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdelaziz',
            'last_name'=> 'Abdelaziz',
            'email'=> 'avocat75@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ibrahim Haddah',
            'last_name'=> 'Ibrahim Haddah',
            'email'=> 'avocat76@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Rashida Mc Mahon',
            'last_name'=> 'Rashida Mc Mahon',
            'email'=> 'avocat77@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Bomlil',
            'last_name'=> 'Ahmed Bomlil',
            'email'=> 'avocat78@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ayad al-Naqash',
            'last_name'=> 'Ayad al-Naqash',
            'email'=> 'avocat79@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdel-Baqi Al-Mansoori est partenaire de Nadia Wehbe',
            'last_name'=> 'Abdel-Baqi Al-Mansoori est partenaire de Nadia Wehbe',
            'email'=> 'avocat80@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Propriétaire caché',
            'last_name'=> 'Propriétaire caché',
            'email'=> 'avocat81@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohammed Al-Mansūrī',
            'last_name'=> 'Mohammed Al-Mansūrī',
            'email'=> 'avocat82@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Al-Wajnati',
            'last_name'=> 'Muhammad Al-Wajnati',
            'email'=> 'avocat83@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Al-Airqi',
            'last_name'=> 'Ahmed Al-Airqi',
            'email'=> 'avocat84@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay Mohamed Abou Hamza',
            'last_name'=> 'Moulay Mohamed Abou Hamza',
            'email'=> 'avocat85@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Malik Shaklat',
            'last_name'=> 'Abdul Malik Shaklat',
            'email'=> 'avocat86@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Latif Ajan',
            'last_name'=> 'Abdul Latif Ajan',
            'email'=> 'avocat87@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Lahénida',
            'last_name'=> 'Ahmed Lahénida',
            'email'=> 'avocat88@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Farho',
            'last_name'=> 'Mohamed Farho',
            'email'=> 'avocat89@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Souad Laghreeb',
            'last_name'=> 'Souad Laghreeb',
            'email'=> 'avocat90@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Rahman Al-Fayadi',
            'last_name'=> 'Abdul Rahman Al-Fayadi',
            'email'=> 'avocat91@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Al-Hassan Abu Zaid',
            'last_name'=> 'Muhammad Al-Hassan Abu Zaid',
            'email'=> 'avocat92@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Boufret',
            'last_name'=> 'Mohamed Boufret',
            'email'=> 'avocat93@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Halim Al Khuraissi',
            'last_name'=> 'Abdul Halim Al Khuraissi',
            'email'=> 'avocat94@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Nūr al-Dīn.',
            'last_name'=> 'Nūr al-Dīn.',
            'email'=> 'avocat95@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Al-Aqib',
            'last_name'=> 'Mohamed Al-Aqib',
            'email'=> 'avocat96@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Razzaq Fateh',
            'last_name'=> 'Abdul Razzaq Fateh',
            'email'=> 'avocat97@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khadija Abdo',
            'last_name'=> 'Khadija Abdo',
            'email'=> 'avocat98@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Dr Abdul Rahman Al-Sabti',
            'last_name'=> 'Dr Abdul Rahman Al-Sabti',
            'email'=> 'avocat99@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hussein Tammy',
            'last_name'=> 'Hussein Tammy',
            'email'=> 'avocat100@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay al-Zein Abd al-Razzaq al-Alawi',
            'last_name'=> 'Moulay al-Zein Abd al-Razzaq al-Alawi',
            'email'=> 'avocat101@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdel-Azim Ait Al-Sayyad',
            'last_name'=> 'Abdel-Azim Ait Al-Sayyad',
            'email'=> 'avocat102@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay Abdel Latif Ahtitic',
            'last_name'=> 'Moulay Abdel Latif Ahtitic',
            'email'=> 'avocat103@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Al-Bashiri Tawfiq',
            'last_name'=> 'Muhammad Al-Bashiri Tawfiq',
            'email'=> 'avocat104@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Nozha Al-Wadghiri',
            'last_name'=> 'Nozha Al-Wadghiri',
            'email'=> 'avocat105@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ibrahim Nazhi',
            'last_name'=> 'Ibrahim Nazhi',
            'email'=> 'avocat106@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdallah Sharkawy',
            'last_name'=> 'Abdallah Sharkawy',
            'email'=> 'avocat107@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Zainab Massi',
            'last_name'=> 'Zainab Massi',
            'email'=> 'avocat108@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Pique-nique supérieur de Mawdani',
            'last_name'=> 'Pique-nique supérieur de Mawdani',
            'email'=> 'avocat109@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Rahim Mohammadi',
            'last_name'=> 'Abdul Rahim Mohammadi',
            'email'=> 'avocat110@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Victoire Bodali',
            'last_name'=> 'Victoire Bodali',
            'email'=> 'avocat111@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Amina Aït Oudou',
            'last_name'=> 'Amina Aït Oudou',
            'email'=> 'avocat112@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'La mer d&#39;Oman',
            'last_name'=> 'La mer d&#39;Oman',
            'email'=> 'avocat113@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'S&#39;il vous plaît Mansouri',
            'last_name'=> 'S&#39;il vous plaît Mansouri',
            'email'=> 'avocat114@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdelaziz',
            'last_name'=> 'Abdelaziz',
            'email'=> 'avocat115@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Idris Khelil',
            'last_name'=> 'Idris Khelil',
            'email'=> 'avocat116@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Fatiha al-Bazari',
            'last_name'=> 'Fatiha al-Bazari',
            'email'=> 'avocat117@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Qadir Masan',
            'last_name'=> 'Abdul Qadir Masan',
            'email'=> 'avocat118@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hayat ben Jameh',
            'last_name'=> 'Hayat ben Jameh',
            'email'=> 'avocat119@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abd al-Ilah al-Hur',
            'last_name'=> 'Abd al-Ilah al-Hur',
            'email'=> 'avocat120@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Youssef Aït Ben Cheikh',
            'last_name'=> 'Youssef Aït Ben Cheikh',
            'email'=> 'avocat121@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Qadir Al-Maqoul',
            'last_name'=> 'Abdul Qadir Al-Maqoul',
            'email'=> 'avocat122@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Hafeez Sidi Haidah',
            'last_name'=> 'Abdul Hafeez Sidi Haidah',
            'email'=> 'avocat123@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Belfadil',
            'last_name'=> 'Mohamed Belfadil',
            'email'=> 'avocat124@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'ʻAbd al-Wahhāb',
            'last_name'=> 'ʻAbd al-Wahhāb',
            'email'=> 'avocat125@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan Nabih',
            'last_name'=> 'Hassan Nabih',
            'email'=> 'avocat126@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Al-Mustafa, les fils du professeur Ali',
            'last_name'=> 'Al-Mustafa, les fils du professeur Ali',
            'email'=> 'avocat127@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Chère Fatiha Bin',
            'last_name'=> 'Chère Fatiha Bin',
            'email'=> 'avocat128@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Kalthoum Bioknash',
            'last_name'=> 'Kalthoum Bioknash',
            'email'=> 'avocat129@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Abu Shukr',
            'last_name'=> 'Muhammad Abu Shukr',
            'email'=> 'avocat130@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Driss Riahi',
            'last_name'=> 'Driss Riahi',
            'email'=> 'avocat131@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Al-Batouli',
            'last_name'=> 'Ahmed Al-Batouli',
            'email'=> 'avocat132@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khalil Al-Bakhti',
            'last_name'=> 'Khalil Al-Bakhti',
            'email'=> 'avocat133@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Boujemaa Boujmla',
            'last_name'=> 'Boujemaa Boujmla',
            'email'=> 'avocat134@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Salwa Magadli',
            'last_name'=> 'Salwa Magadli',
            'email'=> 'avocat135@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Nadia Qarmadi',
            'last_name'=> 'Nadia Qarmadi',
            'email'=> 'avocat136@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Shams al-Duha Abu Saeed',
            'last_name'=> 'Shams al-Duha Abu Saeed',
            'email'=> 'avocat137@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Ashnah',
            'last_name'=> 'Muhammad Ashnah',
            'email'=> 'avocat138@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Ghani Abou Fatima',
            'last_name'=> 'Abdul Ghani Abou Fatima',
            'email'=> 'avocat139@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan Benraqi',
            'last_name'=> 'Hassan Benraqi',
            'email'=> 'avocat140@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Al-Qouraïbi',
            'last_name'=> 'Ahmed Al-Qouraïbi',
            'email'=> 'avocat141@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Fatima Benalal',
            'last_name'=> 'Fatima Benalal',
            'email'=> 'avocat142@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Farid Belhaj Al-Khudair',
            'last_name'=> 'Farid Belhaj Al-Khudair',
            'email'=> 'avocat143@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Al-Hassan Al-Mahdawi',
            'last_name'=> 'Al-Hassan Al-Mahdawi',
            'email'=> 'avocat144@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Meloud Laghdach',
            'last_name'=> 'Meloud Laghdach',
            'email'=> 'avocat145@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ibrahim est un artiste',
            'last_name'=> 'Ibrahim est un artiste',
            'email'=> 'avocat146@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Miloud Hassanassi',
            'last_name'=> 'Miloud Hassanassi',
            'email'=> 'avocat147@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khadija Baghi',
            'last_name'=> 'Khadija Baghi',
            'email'=> 'avocat148@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdallah Nadi',
            'last_name'=> 'Abdallah Nadi',
            'email'=> 'avocat149@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ezzedine Gibran',
            'last_name'=> 'Ezzedine Gibran',
            'email'=> 'avocat150@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Saad Al Mazlani',
            'last_name'=> 'Saad Al Mazlani',
            'email'=> 'avocat151@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Idris Imran al-Idrissi',
            'last_name'=> 'Idris Imran al-Idrissi',
            'email'=> 'avocat152@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Najdi',
            'last_name'=> 'Ahmed Najdi',
            'email'=> 'avocat153@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Rahman Al-Faqeer',
            'last_name'=> 'Abdul Rahman Al-Faqeer',
            'email'=> 'avocat154@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan Aïd',
            'last_name'=> 'Hassan Aïd',
            'email'=> 'avocat155@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Al-Alawi Al-Amari',
            'last_name'=> 'Ahmed Al-Alawi Al-Amari',
            'email'=> 'avocat156@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Rahim Al-Aymani',
            'last_name'=> 'Abdul Rahim Al-Aymani',
            'email'=> 'avocat157@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Ghani Kabbaj',
            'last_name'=> 'Abdul Ghani Kabbaj',
            'email'=> 'avocat158@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Belle Bentaleb',
            'last_name'=> 'Belle Bentaleb',
            'email'=> 'avocat159@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Najib Bentaleb',
            'last_name'=> 'Mohamed Najib Bentaleb',
            'email'=> 'avocat160@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Chère Hélaly',
            'last_name'=> 'Chère Hélaly',
            'email'=> 'avocat161@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan Benbrick',
            'last_name'=> 'Hassan Benbrick',
            'email'=> 'avocat162@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Zahraa Al-Fouly',
            'last_name'=> 'Zahraa Al-Fouly',
            'email'=> 'avocat163@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohammed Admosi',
            'last_name'=> 'Mohammed Admosi',
            'email'=> 'avocat164@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdelaziz',
            'last_name'=> 'Abdelaziz',
            'email'=> 'avocat165@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Al-Numaïla',
            'last_name'=> 'Muhammad Al-Numaïla',
            'email'=> 'avocat166@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Kawji, le partenaire de Khadija, a le visage rouge',
            'last_name'=> 'Muhammad Kawji, le partenaire de Khadija, a le visage rouge',
            'email'=> 'avocat167@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Visage rouge Khadija',
            'last_name'=> 'Visage rouge Khadija',
            'email'=> 'avocat168@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Samir Al-Idrisi Younes',
            'last_name'=> 'Samir Al-Idrisi Younes',
            'email'=> 'avocat169@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay El Hassan en direct',
            'last_name'=> 'Moulay El Hassan en direct',
            'email'=> 'avocat170@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdullah Abou Darran',
            'last_name'=> 'Abdullah Abou Darran',
            'email'=> 'avocat171@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hasan al-Din al-Khattab',
            'last_name'=> 'Hasan al-Din al-Khattab',
            'email'=> 'avocat172@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Al-Tunisie',
            'last_name'=> 'Muhammad Al-Tunisie',
            'email'=> 'avocat173@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Fatima Al-Rabahi',
            'last_name'=> 'Fatima Al-Rabahi',
            'email'=> 'avocat174@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Fawzi Belkawadsi, partenaire d&#39;Abu Al-Wafa',
            'last_name'=> 'Mohamed Fawzi Belkawadsi, partenaire d&#39;Abu Al-Wafa',
            'email'=> 'avocat175@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Habib Al-Azhari',
            'last_name'=> 'Muhammad Habib Al-Azhari',
            'email'=> 'avocat176@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Mahdawi',
            'last_name'=> 'Muhammad Mahdawi',
            'email'=> 'avocat177@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay Abdelmadjid Tahdaoui',
            'last_name'=> 'Moulay Abdelmadjid Tahdaoui',
            'email'=> 'avocat178@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Ghani Al-Zayghi',
            'last_name'=> 'Abdul Ghani Al-Zayghi',
            'email'=> 'avocat179@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Haq Nassif',
            'last_name'=> 'Abdul Haq Nassif',
            'email'=> 'avocat180@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Omar Al-Qarafli',
            'last_name'=> 'Omar Al-Qarafli',
            'email'=> 'avocat181@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Agarev',
            'last_name'=> 'Mohamed Agarev',
            'email'=> 'avocat182@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Avar',
            'last_name'=> 'Ahmed Avar',
            'email'=> 'avocat183@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Riadh',
            'last_name'=> 'Mohamed Riadh',
            'email'=> 'avocat184@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Nour Al-Huda Hakimi',
            'last_name'=> 'Nour Al-Huda Hakimi',
            'email'=> 'avocat185@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Souad Sedky',
            'last_name'=> 'Souad Sedky',
            'email'=> 'avocat186@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Zahraa Aït Benasser',
            'last_name'=> 'Zahraa Aït Benasser',
            'email'=> 'avocat187@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Latif Ghaffar',
            'last_name'=> 'Abdul Latif Ghaffar',
            'email'=> 'avocat188@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Al-Ghazali',
            'last_name'=> 'Muhammad Al-Ghazali',
            'email'=> 'avocat189@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mustafa Zwain',
            'last_name'=> 'Mustafa Zwain',
            'email'=> 'avocat190@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mustafa est intime',
            'last_name'=> 'Mustafa est intime',
            'email'=> 'avocat191@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abd al-Nabi al-Zaytouni',
            'last_name'=> 'Abd al-Nabi al-Zaytouni',
            'email'=> 'avocat192@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Jamila Godard',
            'last_name'=> 'Jamila Godard',
            'email'=> 'avocat193@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Roqaya Safi',
            'last_name'=> 'Roqaya Safi',
            'email'=> 'avocat194@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdallah l&#39;intercesseur',
            'last_name'=> 'Abdallah l&#39;intercesseur',
            'email'=> 'avocat195@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Rahman Bourkan',
            'last_name'=> 'Abdul Rahman Bourkan',
            'email'=> 'avocat196@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdallah Khanfi',
            'last_name'=> 'Abdallah Khanfi',
            'email'=> 'avocat197@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Fatima Bahi',
            'last_name'=> 'Fatima Bahi',
            'email'=> 'avocat198@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdullah Al-Hasnawi',
            'last_name'=> 'Abdullah Al-Hasnawi',
            'email'=> 'avocat199@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay Abdallah Alaoui Ammari',
            'last_name'=> 'Moulay Abdallah Alaoui Ammari',
            'email'=> 'avocat200@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hamid Bullhind',
            'last_name'=> 'Hamid Bullhind',
            'email'=> 'avocat201@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Naïma est importante',
            'last_name'=> 'Naïma est importante',
            'email'=> 'avocat202@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Rahman Al-Moatasem',
            'last_name'=> 'Abdul Rahman Al-Moatasem',
            'email'=> 'avocat203@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohammed Nakhli',
            'last_name'=> 'Mohammed Nakhli',
            'email'=> 'avocat204@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Al-Faqir',
            'last_name'=> 'Ahmed Al-Faqir',
            'email'=> 'avocat205@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Al-Raddad Al-Shorouki',
            'last_name'=> 'Al-Raddad Al-Shorouki',
            'email'=> 'avocat206@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hussein Al Ayadi',
            'last_name'=> 'Hussein Al Ayadi',
            'email'=> 'avocat207@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Bouchra',
            'last_name'=> 'Mohamed Bouchra',
            'email'=> 'avocat208@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Kordani',
            'last_name'=> 'Ahmed Kordani',
            'email'=> 'avocat209@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Aziz Rasmouk',
            'last_name'=> 'Abdul Aziz Rasmouk',
            'email'=> 'avocat210@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Taher Boverdi',
            'last_name'=> 'Taher Boverdi',
            'email'=> 'avocat211@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Abu Al-Wafaa, partenaire de Belquadsi',
            'last_name'=> 'Muhammad Abu Al-Wafaa, partenaire de Belquadsi',
            'email'=> 'avocat212@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Kabir Hafez',
            'last_name'=> 'Abdul Kabir Hafez',
            'email'=> 'avocat213@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Aït El-Faqeer',
            'last_name'=> 'Mohamed Aït El-Faqeer',
            'email'=> 'avocat214@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Abbassi',
            'last_name'=> 'Mohamed Abbassi',
            'email'=> 'avocat215@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Al-Masrywi',
            'last_name'=> 'Muhammad Al-Masrywi',
            'email'=> 'avocat216@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohammed seul',
            'last_name'=> 'Mohammed seul',
            'email'=> 'avocat217@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Soraya ben Lakhrefa',
            'last_name'=> 'Soraya ben Lakhrefa',
            'email'=> 'avocat218@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Gilas',
            'last_name'=> 'Ahmed Gilas',
            'email'=> 'avocat219@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdallah bosniaque',
            'last_name'=> 'Abdallah bosniaque',
            'email'=> 'avocat220@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ibrahim Boni',
            'last_name'=> 'Ibrahim Boni',
            'email'=> 'avocat221@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Ubi',
            'last_name'=> 'Ahmed Ubi',
            'email'=> 'avocat222@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khaled Al-Fatawi',
            'last_name'=> 'Khaled Al-Fatawi',
            'email'=> 'avocat223@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Aisha Kamily Abu Qasim',
            'last_name'=> 'Aisha Kamily Abu Qasim',
            'email'=> 'avocat224@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mariam Demin',
            'last_name'=> 'Mariam Demin',
            'email'=> 'avocat225@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Isbah',
            'last_name'=> 'Mohamed Isbah',
            'email'=> 'avocat226@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdelaziz',
            'last_name'=> 'Abdelaziz',
            'email'=> 'avocat227@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khadija Al-Mansouri',
            'last_name'=> 'Khadija Al-Mansouri',
            'email'=> 'avocat228@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Jalil Lahlou',
            'last_name'=> 'Abdul Jalil Lahlou',
            'email'=> 'avocat229@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Al-Showirky',
            'last_name'=> 'Ahmed Al-Showirky',
            'email'=> 'avocat230@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohammed Habib Abou Abdallah',
            'last_name'=> 'Mohammed Habib Abou Abdallah',
            'email'=> 'avocat231@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Latif Bensalah Associé Hamid Mounib',
            'last_name'=> 'Abdul Latif Bensalah Associé Hamid Mounib',
            'email'=> 'avocat232@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Pour de bons horizons',
            'last_name'=> 'Pour de bons horizons',
            'email'=> 'avocat233@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'fleur marsli',
            'last_name'=> 'fleur marsli',
            'email'=> 'avocat234@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mahdi Sharkawy',
            'last_name'=> 'Mahdi Sharkawy',
            'email'=> 'avocat235@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ali Al-Salami, partenaire des Huit Odo',
            'last_name'=> 'Ali Al-Salami, partenaire des Huit Odo',
            'email'=> 'avocat236@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Aïcha Bensaleh',
            'last_name'=> 'Aïcha Bensaleh',
            'email'=> 'avocat237@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Azmuz',
            'last_name'=> 'Mohamed Azmuz',
            'email'=> 'avocat238@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Harar',
            'last_name'=> 'Mohamed Harar',
            'email'=> 'avocat239@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdoul Latif Fekry',
            'last_name'=> 'Abdoul Latif Fekry',
            'email'=> 'avocat240@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Noureddine Aït Hajj',
            'last_name'=> 'Noureddine Aït Hajj',
            'email'=> 'avocat241@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'sortie bohème',
            'last_name'=> 'sortie bohème',
            'email'=> 'avocat242@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khadija Barada',
            'last_name'=> 'Khadija Barada',
            'email'=> 'avocat243@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ali Boulik',
            'last_name'=> 'Ali Boulik',
            'email'=> 'avocat244@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Youssef Al-Zwaini',
            'last_name'=> 'Youssef Al-Zwaini',
            'email'=> 'avocat245@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Que Dieu vous bénisse',
            'last_name'=> 'Que Dieu vous bénisse',
            'email'=> 'avocat246@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Nadjat Malach',
            'last_name'=> 'Nadjat Malach',
            'email'=> 'avocat247@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Youssef Al-Qazabri',
            'last_name'=> 'Youssef Al-Qazabri',
            'email'=> 'avocat248@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay Youssef Kennoun',
            'last_name'=> 'Moulay Youssef Kennoun',
            'email'=> 'avocat249@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Bonjour',
            'last_name'=> 'Bonjour',
            'email'=> 'avocat250@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Rahman Haïmi',
            'last_name'=> 'Abdul Rahman Haïmi',
            'email'=> 'avocat251@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Ghani Al-Dubairi',
            'last_name'=> 'Abdul Ghani Al-Dubairi',
            'email'=> 'avocat252@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad al-Idrissi',
            'last_name'=> 'Muhammad al-Idrissi',
            'email'=> 'avocat253@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Hamouchi',
            'last_name'=> 'Mohamed Hamouchi',
            'email'=> 'avocat254@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Balbarak',
            'last_name'=> 'Mohamed Balbarak',
            'email'=> 'avocat255@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Fawzia Sharafeddine',
            'last_name'=> 'Fawzia Sharafeddine',
            'email'=> 'avocat256@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Kamal Sharaïbi Hosseini',
            'last_name'=> 'Muhammad Kamal Sharaïbi Hosseini',
            'email'=> 'avocat257@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Kanye',
            'last_name'=> 'Ahmed Kanye',
            'email'=> 'avocat258@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abbas Al-Sharadi',
            'last_name'=> 'Abbas Al-Sharadi',
            'email'=> 'avocat259@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Al-Asri',
            'last_name'=> 'Mohamed Al-Asri',
            'email'=> 'avocat260@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Aïcha Siraj',
            'last_name'=> 'Aïcha Siraj',
            'email'=> 'avocat261@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Heureux Wehbé',
            'last_name'=> 'Heureux Wehbé',
            'email'=> 'avocat262@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Naïma Mutahar',
            'last_name'=> 'Naïma Mutahar',
            'email'=> 'avocat263@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khadija est une bonne compagne',
            'last_name'=> 'Khadija est une bonne compagne',
            'email'=> 'avocat264@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Umm al-Ghaith Boulfrouh',
            'last_name'=> 'Umm al-Ghaith Boulfrouh',
            'email'=> 'avocat265@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Nadia Wehbé',
            'last_name'=> 'Nadia Wehbé',
            'email'=> 'avocat266@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmad Abu al-Zuhur',
            'last_name'=> 'Ahmad Abu al-Zuhur',
            'email'=> 'avocat267@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Fatiha Asham',
            'last_name'=> 'Fatiha Asham',
            'email'=> 'avocat268@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ismaïl Al-Alawi',
            'last_name'=> 'Ismaïl Al-Alawi',
            'email'=> 'avocat269@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Hamid Madhoun',
            'last_name'=> 'Abdul Hamid Madhoun',
            'email'=> 'avocat270@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Amina Bandarwish',
            'last_name'=> 'Amina Bandarwish',
            'email'=> 'avocat271@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Al-Ghazwani',
            'last_name'=> 'Muhammad Al-Ghazwani',
            'email'=> 'avocat272@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'je te dessine civil',
            'last_name'=> 'je te dessine civil',
            'email'=> 'avocat273@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Benzriwel arabe',
            'last_name'=> 'Benzriwel arabe',
            'email'=> 'avocat274@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ali en ce moment',
            'last_name'=> 'Ali en ce moment',
            'email'=> 'avocat275@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Ait Attoush, partenaire de Zamalek',
            'last_name'=> 'Mohamed Ait Attoush, partenaire de Zamalek',
            'email'=> 'avocat276@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Al-Rasheed Zamalek, partenaire d&#39;Ait Attoush',
            'last_name'=> 'Al-Rasheed Zamalek, partenaire d&#39;Ait Attoush',
            'email'=> 'avocat277@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Samad Al-Taraji',
            'last_name'=> 'Abdul Samad Al-Taraji',
            'email'=> 'avocat278@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Fatima Ashrayi',
            'last_name'=> 'Fatima Ashrayi',
            'email'=> 'avocat279@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Samira Kamrani',
            'last_name'=> 'Samira Kamrani',
            'email'=> 'avocat280@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Jalal Amin',
            'last_name'=> 'Muhammad Jalal Amin',
            'email'=> 'avocat281@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Aït Benkdour',
            'last_name'=> 'Mohamed Aït Benkdour',
            'email'=> 'avocat282@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Al-Taher, aie pitié',
            'last_name'=> 'Muhammad Al-Taher, aie pitié',
            'email'=> 'avocat283@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Noureddine Ait mon oncle',
            'last_name'=> 'Noureddine Ait mon oncle',
            'email'=> 'avocat284@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Samad Siraj sunnite',
            'last_name'=> 'Abdul Samad Siraj sunnite',
            'email'=> 'avocat285@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdelilah El Hawary',
            'last_name'=> 'Abdelilah El Hawary',
            'email'=> 'avocat286@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abbas Al-Kheloufi',
            'last_name'=> 'Abbas Al-Kheloufi',
            'email'=> 'avocat287@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Nour al-Din al-Khalil',
            'last_name'=> 'Nour al-Din al-Khalil',
            'email'=> 'avocat288@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abd al-Rahim al-Gharabali',
            'last_name'=> 'Abd al-Rahim al-Gharabali',
            'email'=> 'avocat289@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Kamal Aldnawi',
            'last_name'=> 'Kamal Aldnawi',
            'email'=> 'avocat290@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ibrahim Belkhair',
            'last_name'=> 'Ibrahim Belkhair',
            'email'=> 'avocat291@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'QUERY LENGTH LIMIT EXCEEDED. MAX ALLOWED QUERY => 500 CHARS',
            'last_name'=> 'QUERY LENGTH LIMIT EXCEEDED. MAX ALLOWED QUERY => 500 CHARS',
            'email'=> 'avocat292@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Aziz Al-Sharbi',
            'last_name'=> 'Abdul Aziz Al-Sharbi',
            'email'=> 'avocat293@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Rashid Al-Fasaili',
            'last_name'=> 'Rashid Al-Fasaili',
            'email'=> 'avocat294@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khadija accepte',
            'last_name'=> 'Khadija accepte',
            'email'=> 'avocat295@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdel Rahim Jedi',
            'last_name'=> 'Abdel Rahim Jedi',
            'email'=> 'avocat296@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mostafa Jamawi',
            'last_name'=> 'Mostafa Jamawi',
            'email'=> 'avocat297@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Saïd Shuyukh',
            'last_name'=> 'Saïd Shuyukh',
            'email'=> 'avocat298@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Naïma Al-Rabahi',
            'last_name'=> 'Naïma Al-Rabahi',
            'email'=> 'avocat299@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Aït Keldas',
            'last_name'=> 'Mohamed Aït Keldas',
            'email'=> 'avocat300@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Razzaq Benlibshir',
            'last_name'=> 'Abdul Razzaq Benlibshir',
            'email'=> 'avocat301@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ibrahim Ajwan',
            'last_name'=> 'Ibrahim Ajwan',
            'email'=> 'avocat302@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdelaziz',
            'last_name'=> 'Abdelaziz',
            'email'=> 'avocat303@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Shahmout',
            'last_name'=> 'Muhammad Shahmout',
            'email'=> 'avocat304@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Saïd Sadaki',
            'last_name'=> 'Saïd Sadaki',
            'email'=> 'avocat305@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khadija El-Rouby',
            'last_name'=> 'Khadija El-Rouby',
            'email'=> 'avocat306@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Kamal Al-Din Al-Bakuri',
            'last_name'=> 'Kamal Al-Din Al-Bakuri',
            'email'=> 'avocat307@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Massy',
            'last_name'=> 'Ahmed Massy',
            'email'=> 'avocat308@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay Slimane Amrani',
            'last_name'=> 'Moulay Slimane Amrani',
            'email'=> 'avocat309@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Saïd Tzrit',
            'last_name'=> 'Saïd Tzrit',
            'email'=> 'avocat310@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mostafa Al-Falati est le partenaire du rubis',
            'last_name'=> 'Mostafa Al-Falati est le partenaire du rubis',
            'email'=> 'avocat311@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdel Qader Al-Baydali',
            'last_name'=> 'Abdel Qader Al-Baydali',
            'email'=> 'avocat312@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan est historique',
            'last_name'=> 'Hassan est historique',
            'email'=> 'avocat313@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohammed Al-Fartazi',
            'last_name'=> 'Mohammed Al-Fartazi',
            'email'=> 'avocat314@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Aïcha Aboudi',
            'last_name'=> 'Aïcha Aboudi',
            'email'=> 'avocat315@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Noureddine Hawsley',
            'last_name'=> 'Noureddine Hawsley',
            'email'=> 'avocat316@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Lahcen Boukris Partner LLC Belkhair',
            'last_name'=> 'Lahcen Boukris Partner LLC Belkhair',
            'email'=> 'avocat317@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Bouchaïb Dakher',
            'last_name'=> 'Bouchaïb Dakher',
            'email'=> 'avocat318@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Maria Garfani',
            'last_name'=> 'Maria Garfani',
            'email'=> 'avocat319@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Zahlan',
            'last_name'=> 'Ahmed Zahlan',
            'email'=> 'avocat320@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Yamna Al-Muntaqqi',
            'last_name'=> 'Yamna Al-Muntaqqi',
            'email'=> 'avocat321@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Dômes Numan',
            'last_name'=> 'Dômes Numan',
            'email'=> 'avocat322@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Un pique-nique avec Qadir',
            'last_name'=> 'Un pique-nique avec Qadir',
            'email'=> 'avocat323@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan Labar',
            'last_name'=> 'Hassan Labar',
            'email'=> 'avocat324@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Wafi Hasboun',
            'last_name'=> 'Abdul Wafi Hasboun',
            'email'=> 'avocat325@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Fares',
            'last_name'=> 'Ahmed Fares',
            'email'=> 'avocat326@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdel Samad Gohary',
            'last_name'=> 'Abdel Samad Gohary',
            'email'=> 'avocat327@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Rachid Asfaoun',
            'last_name'=> 'Rachid Asfaoun',
            'email'=> 'avocat328@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Samira Mawardi',
            'last_name'=> 'Samira Mawardi',
            'email'=> 'avocat329@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Latif Aït Moussa',
            'last_name'=> 'Abdul Latif Aït Moussa',
            'email'=> 'avocat330@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Salam Bohsini',
            'last_name'=> 'Abdul Salam Bohsini',
            'email'=> 'avocat331@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Hamid Munib, associé de Bensalah',
            'last_name'=> 'Mohamed Hamid Munib, associé de Bensalah',
            'email'=> 'avocat332@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Allal Boujmla',
            'last_name'=> 'Allal Boujmla',
            'email'=> 'avocat333@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hamid Kabba',
            'last_name'=> 'Hamid Kabba',
            'email'=> 'avocat334@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Hanan',
            'last_name'=> 'Mohamed Hanan',
            'email'=> 'avocat335@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Maryam Karimi',
            'last_name'=> 'Maryam Karimi',
            'email'=> 'avocat336@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Bouabid Al-Qadri',
            'last_name'=> 'Bouabid Al-Qadri',
            'email'=> 'avocat337@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Bouchra Alouli',
            'last_name'=> 'Bouchra Alouli',
            'email'=> 'avocat338@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Rashid Jubeir',
            'last_name'=> 'Rashid Jubeir',
            'email'=> 'avocat339@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Bushra Al-Toumi',
            'last_name'=> 'Bushra Al-Toumi',
            'email'=> 'avocat340@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Al-Saeed Al-Mutribi',
            'last_name'=> 'Muhammad Al-Saeed Al-Mutribi',
            'email'=> 'avocat341@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Salahuddin Al-Rashid',
            'last_name'=> 'Salahuddin Al-Rashid',
            'email'=> 'avocat342@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abd al-Rahim al-Tsarghini',
            'last_name'=> 'Abd al-Rahim al-Tsarghini',
            'email'=> 'avocat343@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Bouchra Aït Benrami',
            'last_name'=> 'Bouchra Aït Benrami',
            'email'=> 'avocat344@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Izz al-Din al-Ghashi',
            'last_name'=> 'Izz al-Din al-Ghashi',
            'email'=> 'avocat345@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Joyeux anniversaire',
            'last_name'=> 'Joyeux anniversaire',
            'email'=> 'avocat346@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohammed Sabari',
            'last_name'=> 'Mohammed Sabari',
            'email'=> 'avocat347@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Rahman Abreta',
            'last_name'=> 'Abdul Rahman Abreta',
            'email'=> 'avocat348@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Al-Hashemiah pour les gardes',
            'last_name'=> 'Al-Hashemiah pour les gardes',
            'email'=> 'avocat349@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan Shanbo',
            'last_name'=> 'Hassan Shanbo',
            'email'=> 'avocat350@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Ali Al-Hadaji',
            'last_name'=> 'Abdul Ali Al-Hadaji',
            'email'=> 'avocat351@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay Hassan Zeridi',
            'last_name'=> 'Moulay Hassan Zeridi',
            'email'=> 'avocat352@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'La vie d&#39;Abou Saadia',
            'last_name'=> 'La vie d&#39;Abou Saadia',
            'email'=> 'avocat353@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Idris ben Zawia',
            'last_name'=> 'Idris ben Zawia',
            'email'=> 'avocat354@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Aziz Aït Ibrahim Al-Qadi',
            'last_name'=> 'Abdul Aziz Aït Ibrahim Al-Qadi',
            'email'=> 'avocat355@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay Hussein Raji',
            'last_name'=> 'Moulay Hussein Raji',
            'email'=> 'avocat356@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Bahlawan',
            'last_name'=> 'Muhammad Bahlawan',
            'email'=> 'avocat357@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Shinwi',
            'last_name'=> 'Muhammad Shinwi',
            'email'=> 'avocat358@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'L&#39;arabe est flatté',
            'last_name'=> 'L&#39;arabe est flatté',
            'email'=> 'avocat359@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Kamal Hubaïl',
            'last_name'=> 'Kamal Hubaïl',
            'email'=> 'avocat360@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Fatima Zahra',
            'last_name'=> 'Fatima Zahra',
            'email'=> 'avocat361@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Malika Dahraïf',
            'last_name'=> 'Malika Dahraïf',
            'email'=> 'avocat362@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Azzedine Aït Kassir',
            'last_name'=> 'Azzedine Aït Kassir',
            'email'=> 'avocat363@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Fleur de brise du matin',
            'last_name'=> 'Fleur de brise du matin',
            'email'=> 'avocat364@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Sidqi',
            'last_name'=> 'Mohamed Sidqi',
            'email'=> 'avocat365@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Saleh Al-Salihi',
            'last_name'=> 'Muhammad Saleh Al-Salihi',
            'email'=> 'avocat366@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Al Ghorfi',
            'last_name'=> 'Mohamed Al Ghorfi',
            'email'=> 'avocat367@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Khallad',
            'last_name'=> 'Mohamed Khallad',
            'email'=> 'avocat368@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Haidah, partenaire de la famille fatimide',
            'last_name'=> 'Ahmed Haidah, partenaire de la famille fatimide',
            'email'=> 'avocat369@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khadija Karmawi',
            'last_name'=> 'Khadija Karmawi',
            'email'=> 'avocat370@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Saïd Kamali',
            'last_name'=> 'Saïd Kamali',
            'email'=> 'avocat371@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Benito est un partenaire des deux, Ali Al-Rahman et Hassan Taymur',
            'last_name'=> 'Muhammad Benito est un partenaire des deux, Ali Al-Rahman et Hassan Taymur',
            'email'=> 'avocat372@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Murad Karmaï',
            'last_name'=> 'Murad Karmaï',
            'email'=> 'avocat373@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Amin Al Qutaish',
            'last_name'=> 'Amin Al Qutaish',
            'email'=> 'avocat374@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdel Fattah Al-Kaki',
            'last_name'=> 'Abdel Fattah Al-Kaki',
            'email'=> 'avocat375@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abd al-Nabi al-Qalamuni, partenaire d&#39;al-Bayashi',
            'last_name'=> 'Abd al-Nabi al-Qalamuni, partenaire d&#39;al-Bayashi',
            'email'=> 'avocat376@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Boutayeb',
            'last_name'=> 'Mohamed Boutayeb',
            'email'=> 'avocat377@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Asim Al-Maroufi',
            'last_name'=> 'Asim Al-Maroufi',
            'email'=> 'avocat378@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdel Moomin National',
            'last_name'=> 'Abdel Moomin National',
            'email'=> 'avocat379@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Omar Benito',
            'last_name'=> 'Omar Benito',
            'email'=> 'avocat380@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'La colère de Tota',
            'last_name'=> 'La colère de Tota',
            'email'=> 'avocat381@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Habib Hazmiri',
            'last_name'=> 'Mohamed Habib Hazmiri',
            'email'=> 'avocat382@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Animi',
            'last_name'=> 'Mohamed Animi',
            'email'=> 'avocat383@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Idris Akmir',
            'last_name'=> 'Idris Akmir',
            'email'=> 'avocat384@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hisham a du talent',
            'last_name'=> 'Hisham a du talent',
            'email'=> 'avocat385@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ṣalāḥ al-Dīn',
            'last_name'=> 'Ṣalāḥ al-Dīn',
            'email'=> 'avocat386@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Naïma Al-Eidar',
            'last_name'=> 'Naïma Al-Eidar',
            'email'=> 'avocat387@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdel Samad Chakroun',
            'last_name'=> 'Abdel Samad Chakroun',
            'email'=> 'avocat388@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Souad Liba',
            'last_name'=> 'Souad Liba',
            'email'=> 'avocat389@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abd al-Razzaq al-Zaytouni',
            'last_name'=> 'Abd al-Razzaq al-Zaytouni',
            'email'=> 'avocat390@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Haq Al-Jaafari',
            'last_name'=> 'Abdul Haq Al-Jaafari',
            'email'=> 'avocat391@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay Abdelaziz El Idrissi',
            'last_name'=> 'Moulay Abdelaziz El Idrissi',
            'email'=> 'avocat392@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohammed Al-Saeedi',
            'last_name'=> 'Mohammed Al-Saeedi',
            'email'=> 'avocat393@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Radwan Diaf',
            'last_name'=> 'Radwan Diaf',
            'email'=> 'avocat394@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay Abd al-Latif al-Raji',
            'last_name'=> 'Moulay Abd al-Latif al-Raji',
            'email'=> 'avocat395@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hafizah al-Kharqi',
            'last_name'=> 'Hafizah al-Kharqi',
            'email'=> 'avocat396@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan Ola',
            'last_name'=> 'Hassan Ola',
            'email'=> 'avocat397@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ṣalāḥ al-Dīn',
            'last_name'=> 'Ṣalāḥ al-Dīn',
            'email'=> 'avocat398@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Rahali',
            'last_name'=> 'Ahmed Rahali',
            'email'=> 'avocat399@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Rahman Dahou',
            'last_name'=> 'Abdul Rahman Dahou',
            'email'=> 'avocat400@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan Kordouni',
            'last_name'=> 'Hassan Kordouni',
            'email'=> 'avocat401@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Bahiha Al-Doukrish',
            'last_name'=> 'Bahiha Al-Doukrish',
            'email'=> 'avocat402@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Miloud Al-Issawi',
            'last_name'=> 'Miloud Al-Issawi',
            'email'=> 'avocat403@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Razzaq Al-Sharqawi',
            'last_name'=> 'Abdul Razzaq Al-Sharqawi',
            'email'=> 'avocat404@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Omar Lahjouji',
            'last_name'=> 'Omar Lahjouji',
            'email'=> 'avocat405@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Peau de fumée',
            'last_name'=> 'Peau de fumée',
            'email'=> 'avocat406@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Par Adel Allwash',
            'last_name'=> 'Par Adel Allwash',
            'email'=> 'avocat407@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Noman Mohammed Al Nadry',
            'last_name'=> 'Noman Mohammed Al Nadry',
            'email'=> 'avocat408@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Rahim Bosna',
            'last_name'=> 'Abdul Rahim Bosna',
            'email'=> 'avocat409@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khaled Zaheri est partenaire d&#39;un étudiant',
            'last_name'=> 'Khaled Zaheri est partenaire d&#39;un étudiant',
            'email'=> 'avocat410@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Tariq Al-Ghorfi',
            'last_name'=> 'Tariq Al-Ghorfi',
            'email'=> 'avocat411@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Razzaq Jabbour',
            'last_name'=> 'Abdul Razzaq Jabbour',
            'email'=> 'avocat412@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Youssef Al-Sahraoui',
            'last_name'=> 'Youssef Al-Sahraoui',
            'email'=> 'avocat413@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Bon supporter',
            'last_name'=> 'Bon supporter',
            'email'=> 'avocat414@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Najia Al-Hadaji',
            'last_name'=> 'Najia Al-Hadaji',
            'email'=> 'avocat415@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Al-Mustafa Al-Mana&#39;i',
            'last_name'=> 'Al-Mustafa Al-Mana&#39;i',
            'email'=> 'avocat416@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan Farfar',
            'last_name'=> 'Hassan Farfar',
            'email'=> 'avocat417@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Al-Ajeed, partenaire du compagnon d&#39;Al-Samad',
            'last_name'=> 'Muhammad Al-Ajeed, partenaire du compagnon d&#39;Al-Samad',
            'email'=> 'avocat418@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Aqramach',
            'last_name'=> 'Muhammad Aqramach',
            'email'=> 'avocat419@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Agit',
            'last_name'=> 'Mohamed Agit',
            'email'=> 'avocat420@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Hanifi',
            'last_name'=> 'Mohamed Hanifi',
            'email'=> 'avocat421@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Noureddine Boungei',
            'last_name'=> 'Noureddine Boungei',
            'email'=> 'avocat422@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdel Salam Jama',
            'last_name'=> 'Abdel Salam Jama',
            'email'=> 'avocat423@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hafsa Al-Zuwaini',
            'last_name'=> 'Hafsa Al-Zuwaini',
            'email'=> 'avocat424@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Latif Al-Asri',
            'last_name'=> 'Abdul Latif Al-Asri',
            'email'=> 'avocat425@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Nasser Al-Ghaziwi',
            'last_name'=> 'Abdul Nasser Al-Ghaziwi',
            'email'=> 'avocat426@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hamid Ahokar',
            'last_name'=> 'Hamid Ahokar',
            'email'=> 'avocat427@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Qadir Aboukaili',
            'last_name'=> 'Abdul Qadir Aboukaili',
            'email'=> 'avocat428@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Jamim',
            'last_name'=> 'Mohamed Jamim',
            'email'=> 'avocat429@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan Jandar',
            'last_name'=> 'Hassan Jandar',
            'email'=> 'avocat430@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan Mazwari',
            'last_name'=> 'Hassan Mazwari',
            'email'=> 'avocat431@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohammed Shawki',
            'last_name'=> 'Mohammed Shawki',
            'email'=> 'avocat432@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mostafa Idrissi',
            'last_name'=> 'Mostafa Idrissi',
            'email'=> 'avocat433@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Karam',
            'last_name'=> 'Mohamed Karam',
            'email'=> 'avocat434@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan Moubaraki Sohry',
            'last_name'=> 'Hassan Moubaraki Sohry',
            'email'=> 'avocat435@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Noureddine Gibran',
            'last_name'=> 'Noureddine Gibran',
            'email'=> 'avocat436@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Sidi Mohamed Alaoui',
            'last_name'=> 'Sidi Mohamed Alaoui',
            'email'=> 'avocat437@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Funat matin',
            'last_name'=> 'Funat matin',
            'email'=> 'avocat438@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Salam Abslami',
            'last_name'=> 'Abdul Salam Abslami',
            'email'=> 'avocat439@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Yunus bin Suleiman',
            'last_name'=> 'Yunus bin Suleiman',
            'email'=> 'avocat440@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay Mustafa Errachidi',
            'last_name'=> 'Moulay Mustafa Errachidi',
            'email'=> 'avocat441@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Rahman Al-Zalmaty',
            'last_name'=> 'Abdul Rahman Al-Zalmaty',
            'email'=> 'avocat442@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Boudjemaa Baati',
            'last_name'=> 'Boudjemaa Baati',
            'email'=> 'avocat443@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdoul Karim Boscoso',
            'last_name'=> 'Abdoul Karim Boscoso',
            'email'=> 'avocat444@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohammed Al-Hansali',
            'last_name'=> 'Mohammed Al-Hansali',
            'email'=> 'avocat445@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Al-Mahfouz Ait Al-Moden',
            'last_name'=> 'Al-Mahfouz Ait Al-Moden',
            'email'=> 'avocat446@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Nadia Najlawi',
            'last_name'=> 'Nadia Najlawi',
            'email'=> 'avocat447@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Majeed Aït Al-Qadi',
            'last_name'=> 'Abdul Majeed Aït Al-Qadi',
            'email'=> 'avocat448@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Chakir Charaf',
            'last_name'=> 'Chakir Charaf',
            'email'=> 'avocat449@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Zohra Boulkheir',
            'last_name'=> 'Zohra Boulkheir',
            'email'=> 'avocat450@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abd al-Malik al-Ba&#39;ashi, partenaire des Qalamoni',
            'last_name'=> 'Abd al-Malik al-Ba&#39;ashi, partenaire des Qalamoni',
            'email'=> 'avocat451@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Fawzia Najdi',
            'last_name'=> 'Fawzia Najdi',
            'email'=> 'avocat452@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khadija Aqa',
            'last_name'=> 'Khadija Aqa',
            'email'=> 'avocat453@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Samad Rafiq, partenaire de Mohammed Al-Ajeed',
            'last_name'=> 'Abdul Samad Rafiq, partenaire de Mohammed Al-Ajeed',
            'email'=> 'avocat454@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Pause douche',
            'last_name'=> 'Pause douche',
            'email'=> 'avocat455@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Saïd Aït Albou',
            'last_name'=> 'Saïd Aït Albou',
            'email'=> 'avocat456@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Najat Hazaoui',
            'last_name'=> 'Najat Hazaoui',
            'email'=> 'avocat457@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khadija Farouk',
            'last_name'=> 'Khadija Farouk',
            'email'=> 'avocat458@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdel-Haq Al-Alawi, partenaire d&#39;Al-Dahdohi',
            'last_name'=> 'Abdel-Haq Al-Alawi, partenaire d&#39;Al-Dahdohi',
            'email'=> 'avocat459@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'heureux digesteur',
            'last_name'=> 'heureux digesteur',
            'email'=> 'avocat460@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moubarak Hafiz',
            'last_name'=> 'Moubarak Hafiz',
            'email'=> 'avocat461@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Fawzia Chatil',
            'last_name'=> 'Fawzia Chatil',
            'email'=> 'avocat462@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Yasi',
            'last_name'=> 'Muhammad Yasi',
            'email'=> 'avocat463@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdelaziz Boukar',
            'last_name'=> 'Abdelaziz Boukar',
            'email'=> 'avocat464@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay Tayeb El Azouzi',
            'last_name'=> 'Moulay Tayeb El Azouzi',
            'email'=> 'avocat465@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Ayto Moubarak',
            'last_name'=> 'Mohamed Ayto Moubarak',
            'email'=> 'avocat466@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abd al-Rahman al-Fatimi',
            'last_name'=> 'Abd al-Rahman al-Fatimi',
            'email'=> 'avocat467@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hamid Shetten',
            'last_name'=> 'Hamid Shetten',
            'email'=> 'avocat468@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Heureux de bien-être',
            'last_name'=> 'Heureux de bien-être',
            'email'=> 'avocat469@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Salam',
            'last_name'=> 'Ahmed Salam',
            'email'=> 'avocat470@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Rabia Labib',
            'last_name'=> 'Rabia Labib',
            'email'=> 'avocat471@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Saïd Mohsen',
            'last_name'=> 'Saïd Mohsen',
            'email'=> 'avocat472@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Nabi Al-Shabrawi',
            'last_name'=> 'Abdul Nabi Al-Shabrawi',
            'email'=> 'avocat473@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Joseph Boukafar',
            'last_name'=> 'Joseph Boukafar',
            'email'=> 'avocat474@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Razzaq Katti',
            'last_name'=> 'Abdul Razzaq Katti',
            'email'=> 'avocat475@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abd al-Hadi al-Dahdohi, partenaire d&#39;al-Yalawi',
            'last_name'=> 'Abd al-Hadi al-Dahdohi, partenaire d&#39;al-Yalawi',
            'email'=> 'avocat476@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Pour le bon verset un',
            'last_name'=> 'Pour le bon verset un',
            'email'=> 'avocat477@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Rashida Saïdi',
            'last_name'=> 'Rashida Saïdi',
            'email'=> 'avocat478@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Al-Hasani',
            'last_name'=> 'Mohamed Al-Hasani',
            'email'=> 'avocat479@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Belaïd et Chen',
            'last_name'=> 'Belaïd et Chen',
            'email'=> 'avocat480@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Salam Al Bayar',
            'last_name'=> 'Abdul Salam Al Bayar',
            'email'=> 'avocat481@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Gohary',
            'last_name'=> 'Mohamed Gohary',
            'email'=> 'avocat482@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan Lakweiti',
            'last_name'=> 'Hassan Lakweiti',
            'email'=> 'avocat483@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Rachida Aït Belmahdi',
            'last_name'=> 'Rachida Aït Belmahdi',
            'email'=> 'avocat484@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Somaya Khaban',
            'last_name'=> 'Somaya Khaban',
            'email'=> 'avocat485@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Zakour',
            'last_name'=> 'Mohamed Zakour',
            'email'=> 'avocat486@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Saadia Zaki',
            'last_name'=> 'Saadia Zaki',
            'email'=> 'avocat487@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hadji révolutionnaire',
            'last_name'=> 'Hadji révolutionnaire',
            'email'=> 'avocat488@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Joyeux Mutawakkil',
            'last_name'=> 'Joyeux Mutawakkil',
            'email'=> 'avocat489@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Rahim Shamsi',
            'last_name'=> 'Abdul Rahim Shamsi',
            'email'=> 'avocat490@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hanan Yaqoubi',
            'last_name'=> 'Hanan Yaqoubi',
            'email'=> 'avocat491@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Fatima Al-Zahra Al-Mansouri',
            'last_name'=> 'Fatima Al-Zahra Al-Mansouri',
            'email'=> 'avocat492@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hussein Zardal',
            'last_name'=> 'Hussein Zardal',
            'email'=> 'avocat493@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Al-Idrisi Gandhi m Idris',
            'last_name'=> 'Al-Idrisi Gandhi m Idris',
            'email'=> 'avocat494@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Hakim Rafi',
            'last_name'=> 'Abdul Hakim Rafi',
            'email'=> 'avocat495@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Rahim Bomkaï',
            'last_name'=> 'Abdul Rahim Bomkaï',
            'email'=> 'avocat496@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Barry Atlantique',
            'last_name'=> 'Barry Atlantique',
            'email'=> 'avocat497@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Joseph Ghaboula',
            'last_name'=> 'Joseph Ghaboula',
            'email'=> 'avocat498@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ibrahim Rugal',
            'last_name'=> 'Ibrahim Rugal',
            'email'=> 'avocat499@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khaled Al-Satraji Benalal',
            'last_name'=> 'Khaled Al-Satraji Benalal',
            'email'=> 'avocat500@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khadija Al-Idrissi',
            'last_name'=> 'Khadija Al-Idrissi',
            'email'=> 'avocat501@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hisham Radnawi',
            'last_name'=> 'Hisham Radnawi',
            'email'=> 'avocat502@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hicham Fadel',
            'last_name'=> 'Hicham Fadel',
            'email'=> 'avocat503@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Sadiq Mansour',
            'last_name'=> 'Abdul Sadiq Mansour',
            'email'=> 'avocat504@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Bartaouch',
            'last_name'=> 'Ahmed Bartaouch',
            'email'=> 'avocat505@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Aziz',
            'last_name'=> 'Mohamed Aziz',
            'email'=> 'avocat506@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Sadiq Alhayyan',
            'last_name'=> 'Abdul Sadiq Alhayyan',
            'email'=> 'avocat507@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan Al-Zahwani',
            'last_name'=> 'Hassan Al-Zahwani',
            'email'=> 'avocat508@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan Al-Fatwaki',
            'last_name'=> 'Hassan Al-Fatwaki',
            'email'=> 'avocat509@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khaled Brad',
            'last_name'=> 'Khaled Brad',
            'email'=> 'avocat510@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Asma Benmoussa',
            'last_name'=> 'Asma Benmoussa',
            'email'=> 'avocat511@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Minya Abadrine',
            'last_name'=> 'Minya Abadrine',
            'email'=> 'avocat512@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Cher Naqaywi',
            'last_name'=> 'Cher Naqaywi',
            'email'=> 'avocat513@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Rabi` al-Awwal al-Kawthari',
            'last_name'=> 'Rabi` al-Awwal al-Kawthari',
            'email'=> 'avocat514@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Traquet heureux',
            'last_name'=> 'Traquet heureux',
            'email'=> 'avocat515@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Latif Al-Amin',
            'last_name'=> 'Abdul Latif Al-Amin',
            'email'=> 'avocat516@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hanan Maatawi',
            'last_name'=> 'Hanan Maatawi',
            'email'=> 'avocat517@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Amal Aït Al Hashami',
            'last_name'=> 'Amal Aït Al Hashami',
            'email'=> 'avocat518@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Lubna, le fils de l&#39;imam',
            'last_name'=> 'Lubna, le fils de l&#39;imam',
            'email'=> 'avocat519@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ilham Al Saker',
            'last_name'=> 'Ilham Al Saker',
            'email'=> 'avocat520@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Asiya Al-Mansouri',
            'last_name'=> 'Asiya Al-Mansouri',
            'email'=> 'avocat521@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Joli bâton',
            'last_name'=> 'Joli bâton',
            'email'=> 'avocat522@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Najia Bonaki',
            'last_name'=> 'Najia Bonaki',
            'email'=> 'avocat523@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Joseph Baroni',
            'last_name'=> 'Joseph Baroni',
            'email'=> 'avocat524@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Bonne nouvelle tout de suite',
            'last_name'=> 'Bonne nouvelle tout de suite',
            'email'=> 'avocat525@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Majeed Al-Jaafari',
            'last_name'=> 'Abdul Majeed Al-Jaafari',
            'email'=> 'avocat526@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Moneim Makir',
            'last_name'=> 'Abdul Moneim Makir',
            'email'=> 'avocat527@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Tariq je te visite',
            'last_name'=> 'Tariq je te visite',
            'email'=> 'avocat528@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hamid Al-Nuwaini',
            'last_name'=> 'Hamid Al-Nuwaini',
            'email'=> 'avocat529@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan Hicham',
            'last_name'=> 'Hassan Hicham',
            'email'=> 'avocat530@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mahdi Makarbel',
            'last_name'=> 'Mahdi Makarbel',
            'email'=> 'avocat531@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'La vie de l&#39;intercesseur',
            'last_name'=> 'La vie de l&#39;intercesseur',
            'email'=> 'avocat532@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Amshaghal',
            'last_name'=> 'Muhammad Amshaghal',
            'email'=> 'avocat533@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Sarhan',
            'last_name'=> 'Ahmed Sarhan',
            'email'=> 'avocat534@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ibrahim Mineur',
            'last_name'=> 'Ibrahim Mineur',
            'email'=> 'avocat535@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Al-Ghalousi est un partenaire de Zahira Hidan',
            'last_name'=> 'Muhammad Al-Ghalousi est un partenaire de Zahira Hidan',
            'email'=> 'avocat536@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Zahira Hidan',
            'last_name'=> 'Zahira Hidan',
            'email'=> 'avocat537@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Latifah Al-Tarouine',
            'last_name'=> 'Latifah Al-Tarouine',
            'email'=> 'avocat538@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khaled Lahrash',
            'last_name'=> 'Khaled Lahrash',
            'email'=> 'avocat539@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Un ennemi d&#39;Abdul Latif est né',
            'last_name'=> 'Un ennemi d&#39;Abdul Latif est né',
            'email'=> 'avocat540@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Fatima Lachahab',
            'last_name'=> 'Fatima Lachahab',
            'email'=> 'avocat541@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Majeed Fleifel',
            'last_name'=> 'Majeed Fleifel',
            'email'=> 'avocat542@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Rachid Kasem',
            'last_name'=> 'Rachid Kasem',
            'email'=> 'avocat543@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Zara voyageur',
            'last_name'=> 'Zara voyageur',
            'email'=> 'avocat544@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'A Latif Ahnoush',
            'last_name'=> 'A Latif Ahnoush',
            'email'=> 'avocat545@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Youssef Barkhiya',
            'last_name'=> 'Youssef Barkhiya',
            'email'=> 'avocat546@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Nadra Al-Lamati',
            'last_name'=> 'Nadra Al-Lamati',
            'email'=> 'avocat547@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ibrahim Siakh',
            'last_name'=> 'Ibrahim Siakh',
            'email'=> 'avocat548@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khalifa Bakoul',
            'last_name'=> 'Khalifa Bakoul',
            'email'=> 'avocat549@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ghorfi Moulay Rachid',
            'last_name'=> 'Ghorfi Moulay Rachid',
            'email'=> 'avocat550@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Youssef Diaf',
            'last_name'=> 'Youssef Diaf',
            'email'=> 'avocat551@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay Hicham Charfi',
            'last_name'=> 'Moulay Hicham Charfi',
            'email'=> 'avocat552@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hicham Ziadi',
            'last_name'=> 'Hicham Ziadi',
            'email'=> 'avocat553@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mostafa Amrawzi',
            'last_name'=> 'Mostafa Amrawzi',
            'email'=> 'avocat554@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Frères Moulay Youssef',
            'last_name'=> 'Frères Moulay Youssef',
            'email'=> 'avocat555@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hicham Farez',
            'last_name'=> 'Hicham Farez',
            'email'=> 'avocat556@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Hakim Al-Khulaifi',
            'last_name'=> 'Abdul Hakim Al-Khulaifi',
            'email'=> 'avocat557@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Le jeu de mot de la tour',
            'last_name'=> 'Le jeu de mot de la tour',
            'email'=> 'avocat558@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Bien chéri',
            'last_name'=> 'Bien chéri',
            'email'=> 'avocat559@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hind Aba Hamid',
            'last_name'=> 'Hind Aba Hamid',
            'email'=> 'avocat560@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khaled Al-Masaoui',
            'last_name'=> 'Khaled Al-Masaoui',
            'email'=> 'avocat561@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hicham Khaldoun',
            'last_name'=> 'Hicham Khaldoun',
            'email'=> 'avocat562@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Souhair Tawfiq',
            'last_name'=> 'Souhair Tawfiq',
            'email'=> 'avocat563@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mustafa Eswery',
            'last_name'=> 'Mustafa Eswery',
            'email'=> 'avocat564@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khaled Belkasir',
            'last_name'=> 'Khaled Belkasir',
            'email'=> 'avocat565@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Jahan Barkoush',
            'last_name'=> 'Jahan Barkoush',
            'email'=> 'avocat566@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Flèches Bwalnet',
            'last_name'=> 'Flèches Bwalnet',
            'email'=> 'avocat567@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Rabih Zulkifl',
            'last_name'=> 'Rabih Zulkifl',
            'email'=> 'avocat568@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Samira Barami',
            'last_name'=> 'Samira Barami',
            'email'=> 'avocat569@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Boualem Karim',
            'last_name'=> 'Boualem Karim',
            'email'=> 'avocat570@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hossam Al-Maarofi, partenaire de Mohamed Al-Maarofi',
            'last_name'=> 'Hossam Al-Maarofi, partenaire de Mohamed Al-Maarofi',
            'email'=> 'avocat571@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Ghani Dakhchon',
            'last_name'=> 'Abdul Ghani Dakhchon',
            'email'=> 'avocat572@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdel Fattah Al-Masnawi',
            'last_name'=> 'Abdel Fattah Al-Masnawi',
            'email'=> 'avocat573@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan Siakh',
            'last_name'=> 'Hassan Siakh',
            'email'=> 'avocat574@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ateqa al-Rami',
            'last_name'=> 'Ateqa al-Rami',
            'email'=> 'avocat575@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Al-Shitaï',
            'last_name'=> 'Muhammad Al-Shitaï',
            'email'=> 'avocat576@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Benachish',
            'last_name'=> 'Mohamed Benachish',
            'email'=> 'avocat577@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohammed Al-Zaytouni',
            'last_name'=> 'Mohammed Al-Zaytouni',
            'email'=> 'avocat578@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdallah Al-Zaytouni',
            'last_name'=> 'Abdallah Al-Zaytouni',
            'email'=> 'avocat579@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Rachid',
            'last_name'=> 'Ahmed Rachid',
            'email'=> 'avocat580@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hind Mansouri',
            'last_name'=> 'Hind Mansouri',
            'email'=> 'avocat581@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdelaziz',
            'last_name'=> 'Abdelaziz',
            'email'=> 'avocat582@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Saïd Benamrouche',
            'last_name'=> 'Saïd Benamrouche',
            'email'=> 'avocat583@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Le nouveau Rahal',
            'last_name'=> 'Le nouveau Rahal',
            'email'=> 'avocat584@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hosni Hubl',
            'last_name'=> 'Hosni Hubl',
            'email'=> 'avocat585@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mustafa Aqrawash',
            'last_name'=> 'Mustafa Aqrawash',
            'email'=> 'avocat586@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Zuhair Samir',
            'last_name'=> 'Zuhair Samir',
            'email'=> 'avocat587@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdulaziz Quanak',
            'last_name'=> 'Abdulaziz Quanak',
            'email'=> 'avocat588@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Toufic Aït Bensalah',
            'last_name'=> 'Toufic Aït Bensalah',
            'email'=> 'avocat589@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Wafaa al-Hajj',
            'last_name'=> 'Wafaa al-Hajj',
            'email'=> 'avocat590@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Une lumière pour ma crème',
            'last_name'=> 'Une lumière pour ma crème',
            'email'=> 'avocat591@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hasna Zalzouli',
            'last_name'=> 'Hasna Zalzouli',
            'email'=> 'avocat592@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Fatima Bourekba',
            'last_name'=> 'Fatima Bourekba',
            'email'=> 'avocat593@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohammed Al-Zanifi',
            'last_name'=> 'Mohammed Al-Zanifi',
            'email'=> 'avocat594@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khaled Aquis',
            'last_name'=> 'Khaled Aquis',
            'email'=> 'avocat595@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Ali Al-Atrachi',
            'last_name'=> 'Abdul Ali Al-Atrachi',
            'email'=> 'avocat596@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdel Fattah Tiba',
            'last_name'=> 'Abdel Fattah Tiba',
            'email'=> 'avocat597@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khaled Aït Khalifa',
            'last_name'=> 'Khaled Aït Khalifa',
            'email'=> 'avocat598@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'La survivante de Maryam',
            'last_name'=> 'La survivante de Maryam',
            'email'=> 'avocat599@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Zakaria Ghatraf',
            'last_name'=> 'Zakaria Ghatraf',
            'email'=> 'avocat600@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Fawzi Tarik',
            'last_name'=> 'Fawzi Tarik',
            'email'=> 'avocat601@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Al-Genawi Al-Arabi',
            'last_name'=> 'Al-Genawi Al-Arabi',
            'email'=> 'avocat602@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Amzian',
            'last_name'=> 'Mohamed Amzian',
            'email'=> 'avocat603@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Albums d&#39;Achraf',
            'last_name'=> 'Albums d&#39;Achraf',
            'email'=> 'avocat604@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Jalal Aït Ghazwan',
            'last_name'=> 'Jalal Aït Ghazwan',
            'email'=> 'avocat605@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mimi Samir',
            'last_name'=> 'Mimi Samir',
            'email'=> 'avocat606@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Momo Noria',
            'last_name'=> 'Momo Noria',
            'email'=> 'avocat607@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mahdi Azhar',
            'last_name'=> 'Mahdi Azhar',
            'email'=> 'avocat608@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Zahani Tawfik',
            'last_name'=> 'Zahani Tawfik',
            'email'=> 'avocat609@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abul-Fath Abdel-Mawla',
            'last_name'=> 'Abul-Fath Abdel-Mawla',
            'email'=> 'avocat610@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Chère Bentoléba',
            'last_name'=> 'Chère Bentoléba',
            'email'=> 'avocat611@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Rachid Aghazaf',
            'last_name'=> 'Rachid Aghazaf',
            'email'=> 'avocat612@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Heureux pâtissier',
            'last_name'=> 'Heureux pâtissier',
            'email'=> 'avocat613@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Adel Khaloufi',
            'last_name'=> 'Adel Khaloufi',
            'email'=> 'avocat614@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Majeed Al-Nomani',
            'last_name'=> 'Abdul Majeed Al-Nomani',
            'email'=> 'avocat615@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'par Amina Boumerouane',
            'last_name'=> 'par Amina Boumerouane',
            'email'=> 'avocat616@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ben Daoudi Hisham',
            'last_name'=> 'Ben Daoudi Hisham',
            'email'=> 'avocat617@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Omar Al-Hadawi',
            'last_name'=> 'Omar Al-Hadawi',
            'email'=> 'avocat618@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan Ashabou',
            'last_name'=> 'Hassan Ashabou',
            'email'=> 'avocat619@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Belaïd Al-Abdalawi',
            'last_name'=> 'Belaïd Al-Abdalawi',
            'email'=> 'avocat620@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Alaoui Moulay Rachid',
            'last_name'=> 'Alaoui Moulay Rachid',
            'email'=> 'avocat621@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Biskra Abdul Aziz',
            'last_name'=> 'Biskra Abdul Aziz',
            'email'=> 'avocat622@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mustafa Maribi',
            'last_name'=> 'Mustafa Maribi',
            'email'=> 'avocat623@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Bahija Ayat Al-Alam',
            'last_name'=> 'Bahija Ayat Al-Alam',
            'email'=> 'avocat624@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Zéroual Omar',
            'last_name'=> 'Zéroual Omar',
            'email'=> 'avocat625@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Révolutionnaire Al-Borzi',
            'last_name'=> 'Révolutionnaire Al-Borzi',
            'email'=> 'avocat626@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abd al-Latif al-Baghdadi',
            'last_name'=> 'Abd al-Latif al-Baghdadi',
            'email'=> 'avocat627@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohammed Al-Hanouni',
            'last_name'=> 'Mohammed Al-Hanouni',
            'email'=> 'avocat628@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Jabbar Haroud',
            'last_name'=> 'Abdul Jabbar Haroud',
            'email'=> 'avocat629@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Kaby Abdel Samad',
            'last_name'=> 'Kaby Abdel Samad',
            'email'=> 'avocat630@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay El Hassan à Noufares, appartement 55, 2ème étage, Boulevard El Horreya, Avenue Mohamed V, Gueliz, Marrakech',
            'last_name'=> 'Moulay El Hassan à Noufares, appartement 55, 2ème étage, Boulevard El Horreya, Avenue Mohamed V, Gueliz, Marrakech',
            'email'=> 'avocat631@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'L&#39;inspiration de Bachiri',
            'last_name'=> 'L&#39;inspiration de Bachiri',
            'email'=> 'avocat632@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ilham Kollal',
            'last_name'=> 'Ilham Kollal',
            'email'=> 'avocat633@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hanan Benhamourou',
            'last_name'=> 'Hanan Benhamourou',
            'email'=> 'avocat634@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Nabil Benaroub',
            'last_name'=> 'Nabil Benaroub',
            'email'=> 'avocat635@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Élias Hatem',
            'last_name'=> 'Élias Hatem',
            'email'=> 'avocat636@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hamid Ajaït',
            'last_name'=> 'Hamid Ajaït',
            'email'=> 'avocat637@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Farsi de Fatima',
            'last_name'=> 'Farsi de Fatima',
            'email'=> 'avocat638@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hisham Jawahery',
            'last_name'=> 'Hisham Jawahery',
            'email'=> 'avocat639@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Nour al-Din al-Ashkr',
            'last_name'=> 'Nour al-Din al-Ashkr',
            'email'=> 'avocat640@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Maarouf',
            'last_name'=> 'Mohamed Maarouf',
            'email'=> 'avocat641@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Sels d&#39;anas',
            'last_name'=> 'Sels d&#39;anas',
            'email'=> 'avocat642@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hafezah Al-Majdoubi',
            'last_name'=> 'Hafezah Al-Majdoubi',
            'email'=> 'avocat643@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hayat Bekawi',
            'last_name'=> 'Hayat Bekawi',
            'email'=> 'avocat644@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Nadia Al-Moden',
            'last_name'=> 'Nadia Al-Moden',
            'email'=> 'avocat645@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay Saïd Kamali',
            'last_name'=> 'Moulay Saïd Kamali',
            'email'=> 'avocat646@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Samira Benmizhar',
            'last_name'=> 'Samira Benmizhar',
            'email'=> 'avocat647@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Fatima Dinouri',
            'last_name'=> 'Fatima Dinouri',
            'email'=> 'avocat648@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Gris Mustafa',
            'last_name'=> 'Gris Mustafa',
            'email'=> 'avocat649@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'S&#39;il vous plaît augmentez-moi',
            'last_name'=> 'S&#39;il vous plaît augmentez-moi',
            'email'=> 'avocat650@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdallah Tashfin',
            'last_name'=> 'Abdallah Tashfin',
            'email'=> 'avocat651@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Zubaida Lamishmar',
            'last_name'=> 'Zubaida Lamishmar',
            'email'=> 'avocat652@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Yunus Bouksso',
            'last_name'=> 'Yunus Bouksso',
            'email'=> 'avocat653@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Élamine Antique',
            'last_name'=> 'Élamine Antique',
            'email'=> 'avocat654@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Taher Abu Zaid',
            'last_name'=> 'Muhammad Taher Abu Zaid',
            'email'=> 'avocat655@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Radwan Habibi',
            'last_name'=> 'Radwan Habibi',
            'email'=> 'avocat656@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Tijani Abent',
            'last_name'=> 'Tijani Abent',
            'email'=> 'avocat657@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Noureddine Harmom',
            'last_name'=> 'Noureddine Harmom',
            'email'=> 'avocat658@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Jawad Abdel Rahim',
            'last_name'=> 'Jawad Abdel Rahim',
            'email'=> 'avocat659@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hassan Aït Orkman',
            'last_name'=> 'Hassan Aït Orkman',
            'email'=> 'avocat660@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ibrahim Boris',
            'last_name'=> 'Ibrahim Boris',
            'email'=> 'avocat661@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mourad Raji',
            'last_name'=> 'Mourad Raji',
            'email'=> 'avocat662@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Hisham Al Ghorfi',
            'last_name'=> 'Muhammad Hisham Al Ghorfi',
            'email'=> 'avocat663@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Baie d&#39;Abdul Latif',
            'last_name'=> 'Baie d&#39;Abdul Latif',
            'email'=> 'avocat664@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hussein Allami',
            'last_name'=> 'Hussein Allami',
            'email'=> 'avocat665@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdallah ben Abdo',
            'last_name'=> 'Abdallah ben Abdo',
            'email'=> 'avocat666@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Alaoui',
            'last_name'=> 'Mohamed Alaoui',
            'email'=> 'avocat667@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Zainab Al-Iraqi Al-Husseini',
            'last_name'=> 'Zainab Al-Iraqi Al-Husseini',
            'email'=> 'avocat668@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Fatiha Fahraoui',
            'last_name'=> 'Fatiha Fahraoui',
            'email'=> 'avocat669@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Miloud Denny',
            'last_name'=> 'Miloud Denny',
            'email'=> 'avocat670@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hamid Asouqi Nihulin',
            'last_name'=> 'Hamid Asouqi Nihulin',
            'email'=> 'avocat671@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hasna Al-Sabaï',
            'last_name'=> 'Hasna Al-Sabaï',
            'email'=> 'avocat672@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Noms Bolzuki',
            'last_name'=> 'Noms Bolzuki',
            'email'=> 'avocat673@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'La colère de Nasabi',
            'last_name'=> 'La colère de Nasabi',
            'email'=> 'avocat674@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Hakim Banboya',
            'last_name'=> 'Abdul Hakim Banboya',
            'email'=> 'avocat675@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'La colère de mes fils',
            'last_name'=> 'La colère de mes fils',
            'email'=> 'avocat676@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Belle Obezi',
            'last_name'=> 'Belle Obezi',
            'email'=> 'avocat677@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Saïd Albaïda',
            'last_name'=> 'Saïd Albaïda',
            'email'=> 'avocat678@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Amina Akzaho',
            'last_name'=> 'Amina Akzaho',
            'email'=> 'avocat679@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Saïd Al-Hadary',
            'last_name'=> 'Saïd Al-Hadary',
            'email'=> 'avocat680@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Al-Tahri',
            'last_name'=> 'Muhammad Al-Tahri',
            'email'=> 'avocat681@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ibrahim Aghaï',
            'last_name'=> 'Ibrahim Aghaï',
            'email'=> 'avocat682@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Rachid Sabela',
            'last_name'=> 'Rachid Sabela',
            'email'=> 'avocat683@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'L&#39;espoir a pitié',
            'last_name'=> 'L&#39;espoir a pitié',
            'email'=> 'avocat684@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'CP certifié',
            'last_name'=> 'CP certifié',
            'email'=> 'avocat685@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Rashid Shahd',
            'last_name'=> 'Rashid Shahd',
            'email'=> 'avocat686@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Yamin Bensaid',
            'last_name'=> 'Yamin Bensaid',
            'email'=> 'avocat687@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Razzaq Al-Azozi',
            'last_name'=> 'Abdul Razzaq Al-Azozi',
            'email'=> 'avocat688@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khadija Al-Idrisi Saad',
            'last_name'=> 'Khadija Al-Idrisi Saad',
            'email'=> 'avocat689@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Ghani Al-Sharqawi Iqbal',
            'last_name'=> 'Abdul Ghani Al-Sharqawi Iqbal',
            'email'=> 'avocat690@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Huda Al-Zuhri',
            'last_name'=> 'Huda Al-Zuhri',
            'email'=> 'avocat691@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hanan Al-Dahdouh',
            'last_name'=> 'Hanan Al-Dahdouh',
            'email'=> 'avocat692@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Aziza Shawky',
            'last_name'=> 'Aziza Shawky',
            'email'=> 'avocat693@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ola Hassan',
            'last_name'=> 'Ola Hassan',
            'email'=> 'avocat694@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Ali Aznak',
            'last_name'=> 'Mohamed Ali Aznak',
            'email'=> 'avocat695@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'joli blanc',
            'last_name'=> 'joli blanc',
            'email'=> 'avocat696@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Akram Hafar',
            'last_name'=> 'Akram Hafar',
            'email'=> 'avocat697@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hicham Sahal',
            'last_name'=> 'Hicham Sahal',
            'email'=> 'avocat698@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ruqayya Qasi',
            'last_name'=> 'Ruqayya Qasi',
            'email'=> 'avocat699@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Frères Moulay Ismail',
            'last_name'=> 'Frères Moulay Ismail',
            'email'=> 'avocat700@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hanan Farah',
            'last_name'=> 'Hanan Farah',
            'email'=> 'avocat701@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khadija Al-Rashdi',
            'last_name'=> 'Khadija Al-Rashdi',
            'email'=> 'avocat702@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Rahim Al Sadaki',
            'last_name'=> 'Abdul Rahim Al Sadaki',
            'email'=> 'avocat703@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mustafa Chakir',
            'last_name'=> 'Mustafa Chakir',
            'email'=> 'avocat704@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Kenza El Sharkawy',
            'last_name'=> 'Kenza El Sharkawy',
            'email'=> 'avocat705@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdullah Aït Hafeez',
            'last_name'=> 'Abdullah Aït Hafeez',
            'email'=> 'avocat706@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay Rachid Alaoui',
            'last_name'=> 'Moulay Rachid Alaoui',
            'email'=> 'avocat707@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khaled Banani',
            'last_name'=> 'Khaled Banani',
            'email'=> 'avocat708@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'L&#39;Arabe est de retour',
            'last_name'=> 'L&#39;Arabe est de retour',
            'email'=> 'avocat709@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mona Talib',
            'last_name'=> 'Mona Talib',
            'email'=> 'avocat710@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mostafa vit',
            'last_name'=> 'Mostafa vit',
            'email'=> 'avocat711@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hamid Loutfi',
            'last_name'=> 'Hamid Loutfi',
            'email'=> 'avocat712@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Samira est plus sérieuse',
            'last_name'=> 'Samira est plus sérieuse',
            'email'=> 'avocat713@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Naji Lamine',
            'last_name'=> 'Naji Lamine',
            'email'=> 'avocat714@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Samira Azyad',
            'last_name'=> 'Samira Azyad',
            'email'=> 'avocat715@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay Rachid Chérif',
            'last_name'=> 'Moulay Rachid Chérif',
            'email'=> 'avocat716@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Joyeux est content',
            'last_name'=> 'Joyeux est content',
            'email'=> 'avocat717@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moïse a légiféré',
            'last_name'=> 'Moïse a légiféré',
            'email'=> 'avocat718@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mariam Lebouhi',
            'last_name'=> 'Mariam Lebouhi',
            'email'=> 'avocat719@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Le pique-nique d&#39;Al-Idrisi',
            'last_name'=> 'Le pique-nique d&#39;Al-Idrisi',
            'email'=> 'avocat720@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Maryam Qubaï',
            'last_name'=> 'Maryam Qubaï',
            'email'=> 'avocat721@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Al-Arabi Makrez',
            'last_name'=> 'Al-Arabi Makrez',
            'email'=> 'avocat722@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Nora Hamni',
            'last_name'=> 'Nora Hamni',
            'email'=> 'avocat723@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Saïd Buhamid',
            'last_name'=> 'Saïd Buhamid',
            'email'=> 'avocat724@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Saadia Belhit',
            'last_name'=> 'Saadia Belhit',
            'email'=> 'avocat725@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Majeed Tashfin',
            'last_name'=> 'Abdul Majeed Tashfin',
            'email'=> 'avocat726@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Soumaya Zeroual',
            'last_name'=> 'Soumaya Zeroual',
            'email'=> 'avocat727@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Layla est une penseuse',
            'last_name'=> 'Layla est une penseuse',
            'email'=> 'avocat728@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Les émotions de Rawani',
            'last_name'=> 'Les émotions de Rawani',
            'email'=> 'avocat729@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Karim Al-Hemma, partenaire d&#39;Al-Qarbali',
            'last_name'=> 'Abdul Karim Al-Hemma, partenaire d&#39;Al-Qarbali',
            'email'=> 'avocat730@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Kamal Habib Allah',
            'last_name'=> 'Kamal Habib Allah',
            'email'=> 'avocat731@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hind Lakhmisti',
            'last_name'=> 'Hind Lakhmisti',
            'email'=> 'avocat732@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Hakim est la clé du bien',
            'last_name'=> 'Abdul Hakim est la clé du bien',
            'email'=> 'avocat733@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'La bénédiction de l&#39;examinateur',
            'last_name'=> 'La bénédiction de l&#39;examinateur',
            'email'=> 'avocat734@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'fleur créative',
            'last_name'=> 'fleur créative',
            'email'=> 'avocat735@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Zainab Ahneeb',
            'last_name'=> 'Zainab Ahneeb',
            'email'=> 'avocat736@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Voie Hybul',
            'last_name'=> 'Voie Hybul',
            'email'=> 'avocat737@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Jalil Boohoo',
            'last_name'=> 'Abdul Jalil Boohoo',
            'email'=> 'avocat738@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ayoub Bohdo',
            'last_name'=> 'Ayoub Bohdo',
            'email'=> 'avocat739@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Lamam',
            'last_name'=> 'Mohamed Lamam',
            'email'=> 'avocat740@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Razzaq Tatwani',
            'last_name'=> 'Abdul Razzaq Tatwani',
            'email'=> 'avocat741@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hamid Al-Barqawi, partenaire de Rashid Bonker',
            'last_name'=> 'Hamid Al-Barqawi, partenaire de Rashid Bonker',
            'email'=> 'avocat742@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Fatima Zahra Azraqi',
            'last_name'=> 'Fatima Zahra Azraqi',
            'email'=> 'avocat743@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdallah rose',
            'last_name'=> 'Abdallah rose',
            'email'=> 'avocat744@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdel Fattah bin Musa',
            'last_name'=> 'Abdel Fattah bin Musa',
            'email'=> 'avocat745@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Yusef Khadorov',
            'last_name'=> 'Yusef Khadorov',
            'email'=> 'avocat746@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohammed Al-Saeed est un gagnant',
            'last_name'=> 'Mohammed Al-Saeed est un gagnant',
            'email'=> 'avocat747@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmad Al-Amrani Zintar',
            'last_name'=> 'Ahmad Al-Amrani Zintar',
            'email'=> 'avocat748@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hanan al-Khusawi',
            'last_name'=> 'Hanan al-Khusawi',
            'email'=> 'avocat749@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Aziz Al-Qadmiri',
            'last_name'=> 'Aziz Al-Qadmiri',
            'email'=> 'avocat750@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Sufyan Al-Jazouli',
            'last_name'=> 'Sufyan Al-Jazouli',
            'email'=> 'avocat751@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Fatima Sarhan',
            'last_name'=> 'Fatima Sarhan',
            'email'=> 'avocat752@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ibrahim Alali',
            'last_name'=> 'Ibrahim Alali',
            'email'=> 'avocat753@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay Fayçal Abu Hamzah',
            'last_name'=> 'Moulay Fayçal Abu Hamzah',
            'email'=> 'avocat754@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Samira Bahji',
            'last_name'=> 'Samira Bahji',
            'email'=> 'avocat755@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mina et Mina',
            'last_name'=> 'Mina et Mina',
            'email'=> 'avocat756@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Pour Fatima Al-Zahraa Al-Fadi',
            'last_name'=> 'Pour Fatima Al-Zahraa Al-Fadi',
            'email'=> 'avocat757@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Sanaa Mohassan',
            'last_name'=> 'Sanaa Mohassan',
            'email'=> 'avocat758@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Bahia Al-Saeedi',
            'last_name'=> 'Bahia Al-Saeedi',
            'email'=> 'avocat759@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Fatima Dardaz',
            'last_name'=> 'Fatima Dardaz',
            'email'=> 'avocat760@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Rachida Moneim',
            'last_name'=> 'Rachida Moneim',
            'email'=> 'avocat761@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mustafa Labziwi',
            'last_name'=> 'Mustafa Labziwi',
            'email'=> 'avocat762@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Succès d&#39;Idris',
            'last_name'=> 'Succès d&#39;Idris',
            'email'=> 'avocat763@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abd al-Rahim al-Qabbab',
            'last_name'=> 'Abd al-Rahim al-Qabbab',
            'email'=> 'avocat764@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhammad Al-Arabi Al-Moataz',
            'last_name'=> 'Muhammad Al-Arabi Al-Moataz',
            'email'=> 'avocat765@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Rashid Zawia',
            'last_name'=> 'Rashid Zawia',
            'email'=> 'avocat766@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Saïd Al-Batouli',
            'last_name'=> 'Saïd Al-Batouli',
            'email'=> 'avocat767@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Latif Al Hassan',
            'last_name'=> 'Latif Al Hassan',
            'email'=> 'avocat768@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Lalla Hanan Yakuti',
            'last_name'=> 'Lalla Hanan Yakuti',
            'email'=> 'avocat769@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Razzaq Ishwan',
            'last_name'=> 'Abdul Razzaq Ishwan',
            'email'=> 'avocat770@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Moulay Larbi Majidi',
            'last_name'=> 'Moulay Larbi Majidi',
            'email'=> 'avocat771@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Fatima Al-Zahra Al-Sharat',
            'last_name'=> 'Fatima Al-Zahra Al-Sharat',
            'email'=> 'avocat772@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Et le prestige d&#39;Abdel-Baqi',
            'last_name'=> 'Et le prestige d&#39;Abdel-Baqi',
            'email'=> 'avocat773@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Majeed Al-Qarbali, partenaire d&#39;Al-Himma',
            'last_name'=> 'Abdul Majeed Al-Qarbali, partenaire d&#39;Al-Himma',
            'email'=> 'avocat774@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hatem Abdel Hafeez',
            'last_name'=> 'Hatem Abdel Hafeez',
            'email'=> 'avocat775@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Sarah Momen',
            'last_name'=> 'Sarah Momen',
            'email'=> 'avocat776@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Heureux Nazaréen',
            'last_name'=> 'Heureux Nazaréen',
            'email'=> 'avocat777@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Asmahan Zamalek',
            'last_name'=> 'Asmahan Zamalek',
            'email'=> 'avocat778@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mâche mes yeux',
            'last_name'=> 'Mâche mes yeux',
            'email'=> 'avocat779@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Najat Al-Saïd',
            'last_name'=> 'Najat Al-Saïd',
            'email'=> 'avocat780@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ahmed Amin Abu Al-Zuhur',
            'last_name'=> 'Ahmed Amin Abu Al-Zuhur',
            'email'=> 'avocat781@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Shaker de Kulthum',
            'last_name'=> 'Shaker de Kulthum',
            'email'=> 'avocat782@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Ibrahim Al-Alawi Al-Soussi Al-Mahamid 5, immeuble 40, 3ème étage, appartement 9, Marrakech',
            'last_name'=> 'Ibrahim Al-Alawi Al-Soussi Al-Mahamid 5, immeuble 40, 3ème étage, appartement 9, Marrakech',
            'email'=> 'avocat783@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Radwan Mansour',
            'last_name'=> 'Radwan Mansour',
            'email'=> 'avocat784@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mustafa Daou',
            'last_name'=> 'Mustafa Daou',
            'email'=> 'avocat785@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Naïma Akred',
            'last_name'=> 'Naïma Akred',
            'email'=> 'avocat786@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdulaziz Radwani',
            'last_name'=> 'Abdulaziz Radwani',
            'email'=> 'avocat787@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mustafa Al Nouri',
            'last_name'=> 'Mustafa Al Nouri',
            'email'=> 'avocat788@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Radwan Khazeez',
            'last_name'=> 'Radwan Khazeez',
            'email'=> 'avocat789@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdel Bar Fayez',
            'last_name'=> 'Abdel Bar Fayez',
            'email'=> 'avocat790@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'couteau supérieur',
            'last_name'=> 'couteau supérieur',
            'email'=> 'avocat791@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Marwan Al-Raghwi',
            'last_name'=> 'Marwan Al-Raghwi',
            'email'=> 'avocat792@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Lubna Achiban',
            'last_name'=> 'Lubna Achiban',
            'email'=> 'avocat793@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Zayn al-ʻĀbidīn',
            'last_name'=> 'Zayn al-ʻĀbidīn',
            'email'=> 'avocat794@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Rabia Shawky',
            'last_name'=> 'Rabia Shawky',
            'email'=> 'avocat795@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Soufiane Benlammoghaddam',
            'last_name'=> 'Soufiane Benlammoghaddam',
            'email'=> 'avocat796@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdel-Fattah El-Zaytouni',
            'last_name'=> 'Abdel-Fattah El-Zaytouni',
            'email'=> 'avocat797@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Mohamed Salah El-Din Fekry',
            'last_name'=> 'Mohamed Salah El-Din Fekry',
            'email'=> 'avocat798@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Salah Al-Ziyadi',
            'last_name'=> 'Salah Al-Ziyadi',
            'email'=> 'avocat799@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hanan Zweta',
            'last_name'=> 'Hanan Zweta',
            'email'=> 'avocat800@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Karima Nazifi',
            'last_name'=> 'Karima Nazifi',
            'email'=> 'avocat801@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Jihan Bohad',
            'last_name'=> 'Jihan Bohad',
            'email'=> 'avocat802@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Halima Al Hachemi',
            'last_name'=> 'Halima Al Hachemi',
            'email'=> 'avocat803@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hamza Admosi',
            'last_name'=> 'Hamza Admosi',
            'email'=> 'avocat804@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Saadia Saber',
            'last_name'=> 'Saadia Saber',
            'email'=> 'avocat805@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Amal Al-Zahari',
            'last_name'=> 'Amal Al-Zahari',
            'email'=> 'avocat806@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdul Karim Hamimi',
            'last_name'=> 'Abdul Karim Hamimi',
            'email'=> 'avocat807@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Abdelaziz',
            'last_name'=> 'Abdelaziz',
            'email'=> 'avocat808@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Hamza Lahnida',
            'last_name'=> 'Hamza Lahnida',
            'email'=> 'avocat809@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Muhyiddin Abdullah',
            'last_name'=> 'Muhyiddin Abdullah',
            'email'=> 'avocat810@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Amin Massous',
            'last_name'=> 'Amin Massous',
            'email'=> 'avocat811@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ],
             [
            'first_name'=> 'Khaled Al-Anadi',
            'last_name'=> 'Khaled Al-Anadi',
            'email'=> 'avocat812@gmail.com',
            'email_verified_at'=> NULL,
            'password'=> Hash::make("admin"),
            'remember_token'=> Str::random(10),
            'profile_image'=> NULL,
            'role'=> 0
            ]
            ];



        foreach ($users as $user) {
            User::create($user);
        }

        // Etape 2
        // User::create([
        //     'first_name' => "Ismail",
        //     'last_name' => "Ict",
        //     'email' => "icf@gmail.com",
        //     'email_verified_at' => NULL,
        //     'password' => Hash::make("admin"), // password
        //     'remember_token' => Str::random(10),
        //     'role' => '1'
        // ]);


    }
}
