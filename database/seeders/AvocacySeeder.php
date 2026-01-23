<?php

namespace Database\Seeders;

use App\Models\Avocacy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AvocacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $avocacy = [
            [
                'title' => 'اجتماعي حوادث الشغل'
            ],
            [
                'title' => 'اجتماعي منازعات الشغل'
            ],
            [
                'title' => 'استعجالي'
            ],
            [
                'title' => 'تجاري'
            ],
            [
                'title' => 'شرعي تطليق للشقاق'
            ],
            [
                'title' => 'مقالات مدني'
            ]
        ];

        Avocacy::insert($avocacy);
    }
}
