<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $lawyers = [
            [
                'slug' => 'mohamed-ahmed',
                'lawyer_id' => 2,
                'prenom_ar' => 'محمد',
                'nom_ar' => 'أحمد',
                'phone_number' => '+212612345679',
                'is_premium' => false,
                'genre' => 'male',
                'bio_ar' => 'محمد أحمد هو محامٍ متخصص في القانون التجاري، لديه خبرة واسعة في مجال التحكيم وتسوية المنازعات.',
                'bio_fr' => 'Mohamed Ahmed est un avocat spécialisé en droit commercial, avec une vaste expérience dans l\'arbitrage et le règlement des différends.',
                'google_maps_link' => 'https://www.google.com/maps/place/Mohamed+Ahmed',
                'whatsapp_link' => 'https://wa.me/212612345679',
                'linkedin_link' => 'https://www.linkedin.com/in/mohamed-ahmed'
            ],
            [
                'slug' => 'ahmed-benali',
                'lawyer_id' => 3,
                'prenom_ar' => 'أحمد',
                'nom_ar' => 'بن علي',
                'phone_number' => '+212661234567',
                'is_premium' => true,
                'genre' => 'male',
                'bio_ar' => 'أحمد بن علي هو محامي متخصص في القانون الجنائي، لديه خبرة واسعة في مجال التحقيق والدفاع عن المتهمين.',
                'bio_fr' => 'Ahmed Benali est un avocat spécialisé en droit pénal, avec une vaste expérience dans l\'enquête et la défense des accusés.',
                'google_maps_link' => 'https://www.google.com/maps/place/Ahmed+Benali',
                'whatsapp_link' => 'https://wa.me/212661234567',
                'linkedin_link' => 'https://www.linkedin.com/in/ahmed-benali'
            ],
            [
                'slug' => 'ahmed-khalid',
                'lawyer_id' => 4,
                'prenom_ar' => 'أحمد',
                'nom_ar' => 'خالد',
                'phone_number' => '+212612345671',
                'is_premium' => true,
                'genre' => 'male',
                'bio_ar' => 'أحمد خالد هو محامي مختص في القانون الجنائي، لديه خبرة واسعة في مجال التحقيق والدفاع عن المتهمين.',
                'bio_fr' => 'Ahmed Khalid est un avocat spécialisé en droit pénal, avec une vaste expérience dans l\'enquête et la défense des accusés.',
                'google_maps_link' => 'https://www.google.com/maps/place/Ahmed+Khalid',
                'whatsapp_link' => 'https://wa.me/212612345671',
                'linkedin_link' => 'https://www.linkedin.com/in/ahmed-khalid'
            ],
            [
                'slug' => 'ismail-gharaf',
                'lawyer_id' => 5,
                'prenom_ar' => 'إسماعيل',
                'nom_ar' => 'الغراف',
                'phone_number' => '+212612345671',
                'is_premium' => true,
                'genre' => 'male',
                'bio_ar' => 'إسماعيل الغراف هو محامي مختص في القانون الجنائي، لديه خبرة واسعة في مجال التحقيق والدفاع عن المتهمين.',
                'bio_fr' => 'Ismail Gharaf est un avocat spécialisé en droit pénal, avec une vaste expérience dans l\'enquête et la défense des accusés.',
                'google_maps_link' => 'https://www.google.com/maps/place/Ahmed+Khalid',
                'whatsapp_link' => 'https://wa.me/212612345671',
                'linkedin_link' => 'https://www.linkedin.com/in/ahmed-khalid'
            ],
            [
                'slug' => 'yassine-el-aatmani',
                'lawyer_id' => 6,
                'prenom_ar' => 'ياسين',
                'nom_ar' => 'العتماني',
                'phone_number' => '+212612345671',
                'is_premium' => true,
                'genre' => 'male',
                'bio_ar' => 'ياسين العتماني هو محامي مختص في القانون الجنائي، لديه خبرة واسعة في مجال التحقيق والدفاع عن المتهمين.',
                'bio_fr' => 'Yassine El Aatmani est un avocat spécialisé en droit pénal, avec une vaste expérience dans l\'enquête et la défense des accusés.',
                'google_maps_link' => 'https://www.google.com/maps/place/Ahmed+Khalid',
                'whatsapp_link' => 'https://wa.me/212612345671',
                'linkedin_link' => 'https://www.linkedin.com/in/ahmed-khalid'
            ],

        ];
        DB::table('lawyer_details')->insert($lawyers);
    }
}
