<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Option::create([
            "id" => 1,
            "option_name" => "siteweb_name_fr",
            "option_value" => "Les avocats de Marrakech"
        ]);

        Option::create([
            "id" => 2,
            "option_name" => "siteweb_name_ar",
            "option_value" => "محاموا مراكش"
        ]);
        Option::create([
            "id" => 3,
            "option_name" => "logo",
            "option_value" => "logo.png"
        ]);

        Option::create([
            "id" => 4,
            "option_name" => "logo_big",
            "option_value" => "logo_big.png"
        ]);

        Option::create([
            "id" => 5,
            "option_name" => "favicon",
            "option_value" => "favicon.png"
        ]);
        Option::create([
            "id" => 6,
            "option_name" => "addresse1",
            "option_value" => "addresse1@gmail.com"
        ]);

        Option::create([
            "id" => 7,
            "option_name" => "addresse2",
            "option_value" => "addresse2@gmail.com"
        ]);

        Option::create([
            "id" => 8,
            "option_name" => "tel1",
            "option_value" => "0694332279"
        ]);

        Option::create([
            "id" => 9,
            "option_name" => "tel2",
            "option_value" => "0694332279"
        ]);

        Option::create([
            "id" => 10,
            "option_name" => "ville",
            "option_value" => "marrakech"
        ]);

        Option::create([
            "id" => 11,
            "option_name" => "localisation",
            "option_value" => "marrakech"
        ]);

        Option::create([
            "id" => 12,
            "option_name" => "keywords_ar",
            "option_value" => "avocats, marrakech"
        ]);

        Option::create([
            "id" => 13,
            "option_name" => "keywords_fr",
            "option_value" => "avocats, marrakech"
        ]);

        Option::create([
            "id" => 14,
            "option_name" => "description_ar",
            "option_value" => "محاموا مراكش - مصدرك للعثور على محامين محترفين في مراكش. نحن نوفر معلومات مفصلة عن أكثر المكاتب المحترفة في مراكش والموارد القانونية المفيدة لمساعدة عملائنا في فهم حقوقهم والتزاماتهم بشكل أفضل."
        ]);

        Option::create([
            "id" => 15,
            "option_name" => "description_fr",
            "option_value" => "Votre ressource pour trouver des avocats professionnels à Marrakech. Nous fournissons des informations détaillées sur les cabinets les plus qualifiés à Marrakech et des ressources juridiques utiles pour mieux comprendre vos droits et obligations."
        ]);

        Option::create([
            "id" => 16,
            "option_name" => "scripts",
            "option_value" => ""
        ]);

    }
}
