<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\User;
use App\Models\Footer;
use App\Models\OneSection;
use App\Models\LandingPage;
use App\Models\UsersPeople;
use Illuminate\Support\Str;
use App\Models\LawyerDetail;
use App\Models\LawyerExpertise;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TestLawyer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user =[
                'first_name'=> "RHOLAMI" ,
                'last_name'=> "Hamdi" ,
                'email'=> "rharrafismail@gmail.com" ,
                'email_verified_at' => NULL,
                'password' => Hash::make("12345"),
                'remember_token' => Str::random(10),
                'profile_image' => 'images/users/lawyer_6.jpg',
                'role' => 0
        ];
        User::create($user);

        $lastId = User::latest()->first()->id;

        UsersPeople::create([
            "user_id" => $lastId ,
            "type" => "lawyer"
        ]);

        $lawyer = [
                    "lawyer_id" => $lastId ,
                    "slug" => "RHOLAMI-Hamdi",
                    "full_name_ar" => "حمدي غلامي"  ,
                    "phone_number" => "(+212) 525 - 30 31 32",
                    "is_premium" => 1,
                    "bio_ar" => "بعد أكثر من 15 عامًا من الممارسة كمدير أعمال في العديد من قطاعات النشاط (الإنشاءات ، والعقارات ، والتوزيع الجماعي ، وما إلى ذلك) ، يختار الأستاذ حمدي رلمي إعادة التدريب المهني ، من خلال تبني نبل مهنة المحامي.
                                إن تدريبه المزدوج ، في إدارة الأعمال والقانون ، بالإضافة إلى الخبرة التي اكتسبها على مدى عدة سنوات في عالم الأعمال ، يمثل اليوم رصيدًا حقيقيًا للشركة ، مما يسمح بنهج سريع وواقعي لمختلف القضايا لكل حالة.
                                تضم الشركة فريقًا من المحامين والمستشارين القانونيين الشباب والديناميكيين والمتنوعين ، الذين يستجيبون لأي نوع من القضايا.
                                بفضل اعتماد استراتيجية التدريب المستمر وإنشاء نظام لتنمية المهارات ، فإن مكتب حمدي رلمي للمحاماة مجهز بشكل دائم بالتطورات الجديدة من حيث القوانين والسوابق القضائية ، وضمان الدعم القانوني الجيد لعملائه
                                . تعمل نيابة عن موكليها في جميع المحاكم المغربية.
                                على المستوى الدولي ، لدى الشركة عدة اتفاقيات مع شركات وشركاء آخرين ، مما يجعل من الممكن إدارة الأعمال عبر الحدود في ظل ظروف جيدة.
                                ",
                    "bio_fr" => "Après plus de 15 ans d’exercice en tant que dirigeant d’entreprises dans plusieurs secteurs d’activité (BTP, Immobilier, Grande distribution…), Maître Hamdi RHOLAMI opte pour une reconversion professionnelle, en épousant la noblesse du métier d’Avocat. Sa double formation, en Management des entreprises et en Droit, ainsi que l’expérience qu'il a acquise durant plusieurs années dans le monde des affaires, représentent aujourd'hui pour le cabinet, un véritable atout permettant une approche rapide et réaliste des différents enjeux pour chaque affaire. Le cabinet comprend une équipe d’avocats et de conseillers juridiques jeunes, dynamiques et polyvalents, répondant à tout type d’affaire. Grâce à l'adoption d\'une stratégie de formation continue et à la mise en place d'un système de développement des compétences, le cabinet d’Avocats Hamdi RHOLAMI, est doté en permanence des nouveautés en matière de lois et de jurisprudence, le permettant d'assurer pour ses clients un accompagnement juridique de qualité Le cabinet d’Avocats Hamdi RHOLAMI, agit au nom de ses clients auprès de tous les tribunaux marocains. Sur le plan international, le cabinet dispose de plusieurs conventions avec d'autres cabinets confrères et partenaires, ce qui permet de gérer des affaires transfrontalières, en de bonnes conditions.",
                    "address" => "رقم 2 ، المبنى 6 ، شارع دي فيو مراكش ،كيليز ، مراكش",
                    "google_maps_link" => "https://www.google.com/maps/embed?pb=!1m22!1m8!1m3!1d434804.77170184464!2d-8.0123837!3d31.6362521!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d31.6438517!2d-8.0165036!4m5!1s0xdafeffa05a4057b%3A0x3c93373f084a9e6a!2sCABINET%20D&#39;AVOCATS%20MAITRE%20HAMDI%20RHOLAMI%20MARRAKECH%206%2C%20Rue%20des%20vieux%20Marrakech%2C%201er%20%C3%A9tage%2C%20Bureau%2C%20n%C2%B0%202%20Marrakech%2040000!3m2!1d31.6362529!2d-8.0123818!5e0!3m2!1sfr!2sma!4v1678706807084!5m2!1sfr!2sma" ,
                    "whatsapp_link" => "https://wa.me/+2126525303132",
                    "linkedin_link" => "https://www.linkedin.com/company/cabinet-ma%C3%AEtre-hamdi-rholami/"
            ];

        LawyerDetail::create($lawyer);

        $Lawyer_detail_lastId = LawyerDetail::latest()->first()->id;

        LawyerExpertise::create(["lawyer_id" => $Lawyer_detail_lastId]);
        $faqs = [
            [
            "lawyer_id" => $lawyer['lawyer_id'],
            "question_fr" => 'Quels sont les services juridiques de l\'entreprise ?',
            "question_ar" => 'ما هي خدمات الشركة القانونية؟',
            "answer_fr" => 'Notre cabinet d\'avocats propose une large gamme de services juridiques, notamment des conseils juridiques, la préparation de documents juridiques, la documentation, l\'arbitrage, la médiation, la défense des clients devant les tribunaux, etc. Veuillez nous contacter pour plus de détails sur nos services.',
            "answer_ar" => 'توفر شركتنا القانونية مجموعة واسعة من الخدمات القانونية، بما في ذلك استشارات قانونية وإعداد الوثائق القانونية والتوثيق والتحكيم والوساطة والدفاع عن العملاء في المحاكم والمزيد. يرجى الاتصال بنا للحصول على مزيد من التفاصيل حول الخدمات التي نقدمها.',
            ],
            [
                "lawyer_id" => $lawyer['lawyer_id'],
                "answer_fr" => 'Nous offrons des conseils juridiques initiaux gratuits aux nouveaux clients. Veuillez nous contacter pour planifier une consultation juridique gratuite.',
                "question_ar" => 'هل يمكنني الحصول على استشارة قانونية مجانية؟',
                "question_fr" => 'Puis-je bénéficier de conseils juridiques gratuits ?',
                "answer_ar" => 'نحن نقدم استشارات قانونية أولية مجانية للعملاء الجدد. يرجى الاتصال بنا لتحديد موعد استشارة قانونية مجانية.',
            ],
            [
                "lawyer_id" => $lawyer['lawyer_id'],
                "question_fr" => 'Quelles mesures dois-je prendre si j\'ai un accident ou une blessure personnelle?',
                "question_ar" => 'ما هي الخطوات التي يجب اتخاذها إذا تعرضت لحادثة أو إصابة شخصية؟',
                "answer_fr" => 'Si vous subissez un accident ou une blessure corporelle, vous devez obtenir immédiatement les soins médicaux nécessaires, puis contacter notre cabinet d\'avocats pour obtenir des conseils juridiques sur vos droits et les actions en justice qui peuvent être prises. Vous devez également conserver tous les documents et rapports médicaux pertinents et rassembler toute preuve à l\'appui de votre demande d\'indemnisation.',
                "answer_ar" => 'إذا تعرضت لحادثة أو إصابة شخصية، يجب عليك الحصول على الرعاية الطبية اللازمة في الحال، ثم الاتصال بشركتنا القانونية للحصول على استشارة قانونية حول حقوقك والإجراءات القانونية التي يمكن اتخاذها. يجب عليك أيضًا الحفاظ على جميع الوثائق والتقارير الطبية ذات الصلة وجمع أي أدلة تدعم مطالبتك بالتعويض.',
            ]
        ];

        $faq1 = Faq::create($faqs[0]);
        $faq2 = Faq::create($faqs[1]);
        $faq3 = Faq::create($faqs[2]);

        LandingPage::create([
            "lawyer_id" => $Lawyer_detail_lastId,
            "faq_id_one" => $faq1->id,
            "faq_id_two" => $faq2->id,
            "faq_id_three" => $faq3->id,
        ]);

        LawyerExpertise::create([
            "lawyer_id" => $Lawyer_detail_lastId
        ]);
        Footer::create([
            "lawyer_id" => $Lawyer_detail_lastId
        ]);
        OneSection::create([
            "lawyer_id" => $Lawyer_detail_lastId,
        ]);

    }
}
