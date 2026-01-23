<?php

namespace Database\Seeders;

use App\Models\Model;
use App\Models\ModelCategory;
use App\Models\ModelFile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = [
            [
                'name' => 'اجتماعي حوادث الشغل'
            ],
            [
                'name' => 'اجتماعي منازعات الشغل'
            ],
            [
                'name' => 'استعجالي'
            ],
            [
                'name' => 'تجاري'
            ],
            [
                'name' => 'شرعي تطليق للشقاق'
            ],
            [
                'name' => 'مقالات مدني'
            ]
        ];

        $files = [
            // [
            //     'model_category_id' => 6,
            //     'name' => 'مقـال  رام  إلى أداء واجبات الكراء مع الإفراغ',
            //     'file_path' => storage_path('app/public/models/general/articles_civil/article_pour_paiement_des_loyers_avec_la_liberation_des_lieux.docx'),
            //     'view_path' => "pdfs.accidents_du_travail.article_pour_paiement_des_loyers_avec_la_liberation_des_lieux",
            //     'options' => json_encode([
            //         [
            //             'id' => 1,
            //             'option_name' => 'السيد',
            //             'option_variable' => 'clientFullname',
            //             'type' => 'text'
            //         ],
            //         [
            //             'id' => 2,
            //             'option_name' => 'الساكن ',
            //             'option_variable' => 'clientAddress',
            //             'type' => 'text'
            //         ],
            //         [
            //             'id' => 3,
            //             'option_name' => 'المنزل الكائن ب',
            //             'option_variable' => 'homeAddress',
            //             'type' => 'text'
            //         ],
            //         [
            //             'id' => 4,
            //             'option_name' => 'وصف المنزل',
            //             'option_variable' => 'homeDescription',
            //             'type' => 'text'
            //         ],
            //         [
            //             'id' => 5,
            //             'option_name' => 'بداية امتناع الأداء',
            //             'option_variable' => 'startDate',
            //             'type' => 'text'
            //         ],
            //         [
            //             'id' => 6,
            //             'option_name' => 'نهاية امتناع الأداء',
            //             'option_variable' => 'endDate',
            //             'type' => 'text'
            //         ],
            //         [
            //             'id' => 7,
            //             'option_name' => 'مجموع الشهور',
            //             'option_variable' => 'totalPeriod',
            //             'type' => 'text'
            //         ],
            //         [
            //             'id' => 8,
            //             'option_name' => 'الثمن المقدر للشهر',
            //             'option_variable' => 'pricePerMonth',
            //             'type' => 'text'
            //         ],
            //         [
            //             'id' => 9,
            //             'option_name' => 'مجموع',
            //             'option_variable' => 'totalPrice',
            //             'type' => 'text'
            //         ],
            //     ])
            // ],
            // [
            //     'model_category_id' => 1,
            //     'name' => 'مقـال  رام  إلى أداء واجبات الكراء مع الإفراغ',
            //     'file_path' => storage_path('app/public/models/general/accidents_du_travail/indemnisation_dun_accident_du_travail.docx'),
            //     'options' => json_encode([
            //         [
            //             'id' => 1,
            //             'option_name' => 'حرر في (تاريخ)',
            //             'option_variable' => 'date',
            //             'type' => 'date'
            //         ],
            //         [
            //             'id' => 2,
            //             'option_name' => 'حرر في (مكان)',
            //             'option_variable' => 'place',
            //             'type' => 'text'
            //         ],
            //         [
            //             'id' => 3,
            //             'option_name' => 'السيد',
            //             'option_variable' => 'fullname',
            //             'type' => 'text'
            //         ],
            //         [
            //             'id' => 4,
            //             'option_name' => 'الساكن',
            //             'option_variable' => 'address',
            //             'type' => 'text'
            //         ],
            //         [
            //             'id' => 5,
            //             'option_name' => 'شركة ',
            //             'option_variable' => 'company',
            //             'type' => 'text'
            //         ],
            //         [
            //             'id' => 6,
            //             'option_name' => 'الحادثة وقعت بتاريخ ',
            //             'option_variable' => 'accedentDate',
            //             'type' => 'date'
            //         ],
            //         [
            //             'id' => 7,
            //             'option_name' => 'شركة التأمين',
            //             'option_variable' => 'assurance',
            //             'type' => 'text'
            //         ],
            //         [
            //             'id' => 8,
            //             'option_name' => 'ممثل القانوني للشركة',
            //             'option_variable' => 'companyRepresenter',
            //             'type' => 'text'
            //         ],
            //         [
            //             'id' => 9,
            //             'option_name' => 'مقر شركةالتامين ',
            //             'option_variable' => 'assuranceAddress',
            //             'type' => 'text'
            //         ],
            //         [
            //             'id' => 10,
            //             'option_name' => 'المرفقــات',
            //             'option_variable' => 'attachements',
            //             'type' => 'text'
            //         ],
            //     ])
            // ],
            [
                'model_category_id' => 1,
                'name' => 'مقال يرمي الى التعويض عن حادثة شغل',
                'file_path' => storage_path('app/public/models/general/accidents_du_travail/indemnisation_dun_accident_du_travail.docx'),
                'view_path' => "pdfs.accidents_du_travail.indemnisation_dun_accident_du_travail",
                'options' => json_encode([
                    [
                        'id' => 1,
                        'option_name' => 'حرر في (تاريخ)',
                        'option_variable' => 'date',
                        'type' => 'date'
                    ],
                    [
                        'id' => 2,
                        'option_name' => 'حرر في (مكان)',
                        'option_variable' => 'place',
                        'type' => 'text'
                    ],
                    [
                        'id' => 3,
                        'option_name' => 'السيد',
                        'option_variable' => 'fullname',
                        'type' => 'text'
                    ],
                    [
                        'id' => 4,
                        'option_name' => 'الساكن',
                        'option_variable' => 'address',
                        'type' => 'text'
                    ],
                    [
                        'id' => 5,
                        'option_name' => 'شركة ',
                        'option_variable' => 'company',
                        'type' => 'text'
                    ],
                    [
                        'id' => 6,
                        'option_name' => 'الحادثة وقعت بتاريخ ',
                        'option_variable' => 'accedentDate',
                        'type' => 'date'
                    ],
                    [
                        'id' => 7,
                        'option_name' => 'شركة التأمين',
                        'option_variable' => 'assurance',
                        'type' => 'text'
                    ],
                    [
                        'id' => 8,
                        'option_name' => 'ممثل القانوني للشركة',
                        'option_variable' => 'companyRepresenter',
                        'type' => 'text'
                    ],
                    [
                        'id' => 9,
                        'option_name' => 'مقر شركةالتامين ',
                        'option_variable' => 'assuranceAddress',
                        'type' => 'text'
                    ],
                    [
                        'id' => 10,
                        'option_name' => 'المرفقــات',
                        'option_variable' => 'attachements',
                        'type' => 'text'
                    ],
                ])
            ],


            // -------------------------
            [
                'model_category_id' => 2,
                'name' => 'مقال يرمي الى اجتماعي منازعات الشغل',
                'file_path' => storage_path('app/public/models/general/conflits_du_travail/article_social_dans_le_cadre_du_code_du_travail.docx'),
                'view_path' => "pdfs.conflits_du_travail.article_social_dans_le_cadre_du_code_du_travail",
                'options' => json_encode([
                    [
                        'id' => 1,
                        'option_name' => 'حرر في (تاريخ)',
                        'option_variable' => 'date',
                        'type' => 'date'
                    ],
                    [
                        'id' => 2,
                        'option_name' => 'حرر في (مكان)',
                        'option_variable' => 'place',
                        'type' => 'text'
                    ],
                    [
                        'id' => 3,
                        'option_name' => 'السيد',
                        'option_variable' => 'fullname',
                        'type' => 'text'
                    ],
                    [
                        'id' => 4,
                        'option_name' => 'الساكن',
                        'option_variable' => 'address',
                        'type' => 'text'
                    ],
                    [
                        'id' => 5,
                        'option_name' => 'اجرة شهرية  قدرها',
                        'option_variable' => 'monthlyWage',
                        'type' => 'text'
                    ],
                    [
                        'id' => 6,
                        'option_name' => 'منذ سنة',
                        'option_variable' => 'startDate',
                        'type' => 'date'
                    ],
                    [
                        'id' => 7,
                        'option_name' => ' الى غاية (شهر وسنة)',
                        'option_variable' => 'endDate',
                        'type' => 'text'
                    ],
                    [
                        'id' => 8,
                        'option_name' => 'جلسة (لأقرب جلسة تعقدونها )',
                        'option_variable' => 'companyRepresenter',
                        'type' => 'text'
                    ],
                    [
                        'id' => 9,
                        'option_name' => 'الكائن (مقرها الاجتماعية )',
                        'option_variable' => 'socielBased',
                        'type' => 'text'
                    ]
                ])
            ],
            [
                'model_category_id' => 3,
                'name' => 'مقال استعجالي',
                'file_path' => storage_path('app/public/models/general/urgente/article_pour_demande_paiement.docx'),
                'view_path' => "pdfs.urgente.article_pour_demande_paiement",
                'options' => json_encode([
                    [
                        'id' => 1,
                        'option_name' => 'يتشرف السيد',
                        'option_variable' => 'maitreHonore',
                        'type' => 'text'
                    ],
                    [
                        'id' => 2,
                        'option_name' => 'الكائن دوار',
                        'option_variable' => 'objetTourne',
                        'type' => 'text'
                    ],
                    [
                        'id' => 3,
                        'option_name' => 'النائب عنه الاستاذ',
                        'option_variable' => 'representantStade',
                        'type' => 'text'
                    ],
                    [
                        'id' => 4,
                        'option_name' => 'دائن السيد',
                        'option_variable' => 'creancierMaitre',
                        'type' => 'text'
                    ],
                    [
                        'id' => 5,
                        'option_name' => 'للكائن',
                        'option_variable' => 'objet',
                        'type' => 'text'
                    ],
                    [
                        'id' => 6,
                        'option_name' => 'بمبلغ',
                        'option_variable' => 'montant',
                        'type' => 'number'
                    ],
                    [
                        'id' => 7,
                        'option_name' => 'باداء للعارض',
                        'option_variable' => 'performance',
                        'type' => 'text'
                    ],
                    [
                        'id' => 8,
                        'option_name' => 'مبلغ للعارض',
                        'option_variable' => 'montantExposant',
                        'type' => 'number'
                    ],
                    [
                        'id' => 9,
                        'option_name' => 'توقيع الاستاد',
                        'option_variable' => 'signature',
                        'type' => 'text'
                    ],
                    [
                        'id' => 10,
                        'option_name' => 'رقم  ملف',
                        'option_variable' => 'numDossier',
                        'type' => 'text'
                    ],
                    [
                        'id' => 11,
                        'option_name' => 'اديت بالتاريخ',
                        'option_variable' => 'datePerformance',
                        'type' => 'text'
                    ],
                    [
                        'id' => 12,
                        'option_name' => 'توصل رقم',
                        'option_variable' => 'attendreNumero',
                        'type' => 'text'
                    ],
                    [
                        'id' => 13,
                        'option_name' => 'الواجب',
                        'option_variable' => 'devoir',
                        'type' => 'text'
                    ]
                ])
            ],
            [
                'model_category_id' => 3,
                'name' => ' مقال استعجالي رام الى استرجاع ناقلة' ,
                'file_path' => storage_path('app/public/models/general/urgente/article_urgent_ram_récupérer_pétrolier.docx'),
                'view_path' => "pdfs.urgente.article_urgent_ram_récupérer_pétrolier",
                'options' => json_encode([
                    [
                        'id' => 1,
                        'option_name' => 'حرر في (تاريخ)',
                        'option_variable' => 'date',
                        'type' => 'date'
                    ],
                    [
                        'id' => 2,
                        'option_name' => 'لفائــدة',
                        'option_variable' => 'benefit',
                        'type' => 'text'
                    ],
                    [
                        'id' => 3,
                        'option_name' => 'الساكنـة',
                        'option_variable' => 'address',
                        'type' => 'text'
                    ],
                    [
                        'id' => 4,
                        'option_name' => 'ضد شركة',
                        'option_variable' => 'company',
                        'type' => 'text'
                    ],
                    [
                        'id' => 5,
                        'option_name' => 'ممثلها القانوني الكائــن',
                        'option_variable' => 'object',
                        'type' => 'text'
                    ],
                    [
                        'id' => 6,
                        'option_name' => 'سيارة من نوع',
                        'option_variable' => 'carType',
                        'type' => 'text'
                    ],
                    [
                        'id' => 7,
                        'option_name' => 'ذات اللوحة عدد',
                        'option_variable' => 'numberPlate',
                        'type' => 'number'
                    ],
                    [
                        'id' => 8,
                        'option_name' => 'بقيمة',
                        'option_variable' => 'worth',
                        'type' => 'text'
                    ],
                    [
                        'id' => 9,
                        'option_name' => ' اقساط شهرية حسب مبلغ',
                        'option_variable' => 'monthlyAmount',
                        'type' => 'number'
                    ],
                    [
                        'id' => 10,
                        'option_name' => 'أدت منها كتسبيق مبلغ',
                        'option_variable' => 'advanceAmount',
                        'type' => 'number'
                    ],
                    [
                        'id' => 11,
                        'option_name' => 'المحكمة الابتدائية المدنية',
                        'option_variable' => 'civilCourt',
                        'type' => 'text'
                    ],
                    [
                        'id' => 12,
                        'option_name' => 'تحت عدد',
                        'option_variable' => 'civilCourtUnderNumber',
                        'type' => 'number'
                    ],
                    [
                        'id' => 13,
                        'option_name' => 'في الملف',
                        'option_variable' => 'civilCourtFile',
                        'type' => 'text'
                    ],
                    [
                        'id' => 14,
                        'option_name' => 'بتاريخ',
                        'option_variable' => 'civilCourtDate',
                        'type' => 'date'
                    ],
                    [
                        'id' => 15,
                        'option_name' => 'عقد الائتمان الايجاري عدد',
                        'option_variable' => 'RentalCreditNumber',
                        'type' => 'number'
                    ],
                    [
                        'id' => 16,
                        'option_name' => ' وارجاع الناقلة من نوع',
                        'option_variable' => 'tankerType',
                        'type' => 'text'
                    ],
                    [
                        'id' => 17,
                        'option_name' => 'المسجلة بالمغرب تحت رقم',
                        'option_variable' => 'RegistredUnderNo',
                        'type' => 'number'
                    ],
                    [
                        'id' => 18,
                        'option_name' => 'العارضة بتاريخ',
                        'option_variable' => 'Cdate',
                        'type' => 'date'
                    ],
                    [
                        'id' => 19,
                        'option_name' => 'قضى بفسخ عقد الائتمان الايجاري عدد',
                        'option_variable' => 'annulRentalCredit',
                        'type' => 'number'
                    ],
                    [
                        'id' => 20,
                        'option_name' => 'الملف عدد',
                        'option_variable' => 'AFileNumber',
                        'type' => 'number'
                    ],
                    [
                        'id' => 21,
                        'option_name' => 'بتاريخ',
                        'option_variable' => 'Adate',
                        'type' => 'date'
                    ],
                    [
                        'id' => 22,
                        'option_name' => 'استرجاع السيارة نوع',
                        'option_variable' => 'vehicleType',
                        'type' => 'text'
                    ],
                    [
                        'id' => 23,
                        'option_name' => 'اللوحة عدد',
                        'option_variable' => 'paintingNumber',
                        'type' => 'number'
                    ],
                    [
                        'id' => 24,
                        'option_name' => 'طائلة غرامة تهديدية قدرها',
                        'option_variable' => 'threatAmount',
                        'type' => 'number'
                    ],
                    [
                        'id' => 25,
                        'option_name' => 'نسخة من الامر الاستعجالي عدد  (المرفقات)',
                        'option_variable' => 'urgentMatterNumber',
                        'type' => 'number'
                    ],
                    [
                        'id' => 26,
                        'option_name' => 'الملف (المرفقات)',
                        'option_variable' => 'uFile',
                        'type' => 'text'
                    ],
                    [
                        'id' => 27,
                        'option_name' => 'نسخة من القرار عدد (المرفقات)',
                        'option_variable' => 'decisionNumber',
                        'type' => 'number'
                    ],
                    [
                        'id' => 28,
                        'option_name' => 'في الملف عدد (المرفقات)',
                        'option_variable' => 'dFile',
                        'type' => 'number'
                    ],
                ])
            ],
            // 'مقال رام إلى التطليق للشقاق (رجل)'
            [
                'model_category_id' => 5,
                'name' => 'مقال رام إلى التطليق للشقاق (رجل)',
                'file_path' => storage_path('app/public/models/general/divorce/divorce_home.docx'),
                'view_path' => "pdfs.divorce.divorce_homme",
                'options' => json_encode([
                    [
                        'id' => 1,
                        'option_name' => 'حرر في (تاريخ)',
                        'option_variable' => 'date',
                        'type' => 'date'
                    ],

                    [
                        'id' => 3,
                        'option_name' => 'السيد',
                        'option_variable' => 'fullname',
                        'type' => 'text'
                    ],
                    [
                        'id' => 4,
                        'option_name' => 'الساكن',
                        'option_variable' => 'address',
                        'type' => 'text'
                    ],
                    [
                        'id' => 5,
                        'option_name' => 'عقد الزواج المضمن بعدد ',
                        'option_variable' => 'ContratMariageInclusNum',
                        'type' => 'text'
                    ],
                    [
                        'id' => 6,
                        'option_name' =>  'صحيفة',
                        'option_variable' => 'journal',
                        'type' => 'text'
                    ],
                    [
                        'id' => 1,
                        'option_name' => 'رقم كناش',
                        'option_variable' => 'NumeroKanash',
                        'type' => 'number'
                    ],
                    [
                        'id' => 2,
                        'option_name' => 'بتاريخ',
                        'option_variable' => 'Date',
                        'type' => 'text'
                    ],
                    [
                        'id' => 3,
                        'option_name' => 'السيدة',
                        'option_variable' => 'Mme',
                        'type' => 'text'
                    ],
                    [
                        'id' => 4,
                        'option_name' => 'الساكنة',
                        'option_variable' => 'MmeAddress',
                        'type' => 'text'
                    ]
                ])
            ],

             // 'مقال رام إلى التطليق للشقاق (رجل)'
            [
                'model_category_id' => 5,
                'name' => 'مقال رام إلى التطليق للشقاق (للنساء)',
                'file_path' => storage_path('app/public/models/general/divorce/divorce_femme.docx'),
                'view_path' => "pdfs.divorce.divorce_femme",
                'options' => json_encode([
                    [
                        'id' => 1,
                        'option_name' => 'حرر في (تاريخ)',
                        'option_variable' => 'date',
                        'type' => 'date'
                    ],
                    [
                        'id' => 2,
                        'option_name' => 'حرر في (مكان)',
                        'option_variable' => 'place',
                        'type' => 'text'
                    ],
                    [
                        'id' => 3,
                        'option_name' => 'السيدة',
                        'option_variable' => 'fullname',
                        'type' => 'text'
                    ],
                    [
                        'id' => 4,
                        'option_name' => 'الساكنة',
                        'option_variable' => 'address',
                        'type' => 'text'
                    ],
                    [
                        'id' => 5,
                        'option_name' => 'عقد الزواج المضمن بعدد ',
                        'option_variable' => 'ContratMariageInclusNum',
                        'type' => 'text'
                    ],
                    [
                        'id' => 6,
                        'option_name' =>  'صحيفة',
                        'option_variable' => 'journal',
                        'type' => 'date'
                    ],
                    [
                        'id' => 7,
                        'option_name' => 'مذكرة الحفظ رقم',
                        'option_variable' => 'NoteReservation',
                        'type' => 'text'
                    ],
                    [
                        'id' =>8,
                        'option_name' => 'بتاريخ',
                        'option_variable' => 'Date',
                        'type' => 'text'
                    ],
                    [
                        'id' => 9,
                        'option_name' => 'عدد الاطفال وتاريخ الميلاد',
                        'option_variable' => 'NbrEnfantDateNaissance',
                        'type' => 'text'
                    ],
                    [
                        'id' => 10,
                        'option_name' => 'نفقة ابنائها',
                        'option_variable' => 'PensionAlimentaireEnfants',
                        'type' => 'text'
                    ],
                    [
                        'id' => 11,
                        'option_name' => 'اقرب جلسة تعقدونها الى السيد (المدة من تاريخ)',
                        'option_variable' => 'StartDate',
                        'type' => 'text'
                    ],
                    [
                        'id' => 12,
                        'option_name' => 'الكائن',
                        'option_variable' => 'Objet',
                        'type' => 'text'
                    ],
                    [
                        'id' => 13,
                        'option_name' => 'السيد',
                        'option_variable' => 'M',
                        'type' => 'text'
                    ],
                    [
                        'id' => 14,
                        'option_name' => 'المدعى عليه توقف عن النفقة منذ شهر',
                        'option_variable' => 'ArretePensionAlimentaire',
                        'type' => 'text'
                    ],
                    [
                        'id' => 15,
                        'option_name' => 'المدعى عليه توقف عن النفقة منذ شهر',
                        'option_variable' => 'MontantJugement',
                        'type' => 'text'
                    ],
                ])
            ],

            [
                'model_category_id' => 6,
                'name' => 'مقـال  رام  إلى أداء واجبات الكراء مع الإفراغ',
                'file_path' => storage_path('app/public/models/general/articles_civil/article_pour_paiement_des_loyers_avec_la_liberation_des_lieux.docx'),
                'view_path' => "pdfs.articles_civil.article_pour_paiement_des_loyers_avec_la_liberation_des_lieux",
                'options' => json_encode([
                    [
                        'id' => 1,
                        'option_name' => 'حرر في (تاريخ)',
                        'option_variable' => 'date',
                        'type' => 'date'
                    ],

                    [
                        'id' => 2,
                        'option_name' => 'السيد',
                        'option_variable' => 'clientFullname',
                        'type' => 'text'
                    ],
                    [
                        'id' => 3,
                        'option_name' => 'الساكن',
                        'option_variable' => 'clientAddress',
                        'type' => 'text'
                    ],
                    [
                        'id' => 4,
                        'option_name' => 'المدعى عليه يعتمر المنزل الكائن ب',
                        'option_variable' => 'homeAddress',
                        'type' => 'text'
                    ],
                    [
                        'id' => 5,
                        'option_name' =>  'الذي عبارة عن',
                        'option_variable' => 'homeDescription',
                        'type' => 'date'
                    ],
                    [
                        'id' => 6,
                        'option_name' => 'الفترة من (تاريخ) ',
                        'option_variable' => 'startDate',
                        'type' => 'text'
                    ],
                    [
                        'id' => 7,
                        'option_name' => 'الى متم (تاريخ)',
                        'option_variable' => 'endDate',
                        'type' => 'text'
                    ],
                    [
                        'id' => 8,
                        'option_name' => 'عدد الاشهر',
                        'option_variable' => 'totalPeriod',
                        'type' => 'text'
                    ],
                    [
                        'id' => 9,
                        'option_name' => 'مبلغ الشهري',
                        'option_variable' => 'pricePerMonth',
                        'type' => 'text'
                    ],
                    [
                        'id' => 10,
                        'option_name' => 'المبلغ الاجمالي',
                        'option_variable' => 'priceTotal',
                        'type' => 'text'
                    ],
                    [
                        'id' => 11,
                        'option_name' => 'عدم أداء واجبات',
                        'option_variable' => 'ManquantFonctions',
                        'type' => 'text'
                    ],
                    [
                        'id' => 12,
                        'option_name' => 'الفترة من (تاريخ)',
                        'option_variable' => 'StartPeriod',
                        'type' => 'text'
                    ],
                    [
                        'id' => 13,
                        'option_name' => 'الى متم (تاريخ)',
                        'option_variable' => 'EndPeriod',
                        'type' => 'text'
                    ],
                    [
                        'id' => 14,
                        'option_name' => 'تمن الشهر و تمن اجمالي الشهور',
                        'option_variable' => 'AmountJrMonth',
                        'type' => 'text'
                    ],
                    [
                        'id' => 15,
                        'option_name' => 'الفترة مطالبت المدعي بأداء واجبات الكراء',
                        'option_variable' => 'PeriodeExecuterFunction',
                        'type' => 'text'
                    ],
                    [
                        'id' => 16,
                        'option_name' => 'حسب سومة كرائية قدرها',
                        'option_variable' => 'AccordingBadMark',
                        'type' => 'text'
                    ],
                    [
                        'id' => 17,
                        'option_name' => 'المفوض القضائي السيد',
                        'option_variable' => 'CommissaireJudiciaire',
                        'type' => 'text'
                    ],
                    [
                        'id' => 18,
                        'option_name' => 'لم يعد يعتمر المنزل موضوع الدعوى منذ (تاريخ)',
                        'option_variable' => 'InhabitedDate',
                        'type' => 'text'
                    ],
                    [
                        'id' => 19,
                        'option_name' => 'بمبالغ الكراء عن المدة المذكورة أي ما قدره',
                        'option_variable' => 'MontantLocation',
                        'type' => 'text'
                    ],
                    [
                        'id' => 20,
                        'option_name' => 'واجبات استهلاك الماء والكهرباء البالغة',
                        'option_variable' => 'ExtensiveWaterElec',
                        'type' => 'text'
                    ],
                    [
                        'id' => 21,
                        'option_name' => 'تعويض عن التماطل محدد في',
                        'option_variable' => 'CompensationIdle',
                        'type' => 'text'
                    ],
                    [
                        'id' => 22,
                        'option_name' => 'السيدة',
                        'option_variable' => 'SessionHoldingTo',
                        'type' => 'text'
                    ],
                    [
                        'id' => 23,
                        'option_name' => 'جلسة تعقدونها إلى السيد',
                        'option_variable' => 'Inhabitant',
                        'type' => 'text'
                    ],
                    [
                        'id' => 24,
                        'option_name' => 'بمقر عمله',
                        'option_variable' => 'HisWorkplace',
                        'type' => 'text'
                    ],
                    [
                        'id' => 25,
                        'option_name' => 'غرامة تهديدية عن كل يوم تأخير  قدرها',
                        'option_variable' => 'FineOfDelay',
                        'type' => 'text'
                    ]
                ])
            ],
            //  مقـال افتتاحي  رام  إلى أداء  واجبات الكراء مع الافراغ
            [
                'model_category_id' => 4,
                'name' => 'مقال استعجالي',
                'file_path' => storage_path('app/public/models/general/commercial/article_pour_paiement_des_loyers.docx'),
                'view_path' => "pdfs.commercial.article_pour_paiement_des_loyers",
                'options' => json_encode([
                    [
                        'id' => 1,
                        'option_name' => 'حرر في (تاريخ)',
                        'option_variable' => 'date',
                        'type' => 'date'
                    ],
                    [
                        'id' => 2,
                        'option_name' => 'السيد',
                        'option_variable' => 'Mr',
                        'type' => 'text'
                    ],
                    [
                        'id' => 3,
                        'option_name' => 'الساكن',
                        'option_variable' => 'Consonant',
                        'type' => 'text'
                    ],
                    [
                        'id' => 4,
                        'option_name' => 'مستخرج من',
                        'option_variable' => 'ObjectHome',
                        'type' => 'text'
                    ],
                    [
                        'id' => 5,
                        'option_name' => 'المتجر',
                        'option_variable' => 'TheShop',
                        'type' => 'text'
                    ],
                    [
                        'id' => 6,
                        'option_name' => 'رسوم الشهرية',
                        'option_variable' => 'MonthlyFee',
                        'type' => 'text'
                    ],
                    [
                        'id' => 7,
                        'option_name' => 'العقد المبرم بين الطرفين بتاريخ',
                        'option_variable' => 'DateContract',
                        'type' => 'text'
                    ],
                    [
                        'id' => 8,
                        'option_name' => 'لم تقم بأداء واجبك منذ تاريخ البدء',
                        'option_variable' => 'StartDate',
                        'type' => 'date'
                    ],
                    [
                        'id' => 9,
                        'option_name' => 'حتى نهاية الشهر',
                        'option_variable' => 'EndDate',
                        'type' => 'date'
                    ],
                    [
                        'id' => 10,
                        'option_name' => 'مما جعل ذمتها مليئاً عامرة بواجبات الكراء تفوق(عدد الأشهر)',
                        'option_variable' => 'NumberMonths',
                        'type' => 'number'
                    ],
                    [
                        'id' => 11,
                        'option_name' => ' إجمالي (المبلغ = رسوم الشهرية * عدد الأشهر)',
                        'option_variable' => 'TotalAmount',
                        'type' => 'number'
                    ],
                    [
                        'id' => 12,
                        'option_name' => 'إضافة إلى المبلغ',
                        'option_variable' => 'AddAmount',
                        'type' => 'number'
                    ],
                    [
                        'id' => 13,
                        'option_name' => 'المتبقي للشهر',
                        'option_variable' => 'RemainingMonth',
                        'type' => 'text'
                    ],
                    [
                        'id' => 14,
                        'option_name' => 'للحصول على المجموع هو(إجمالي + المبلغ المضيفة) ',
                        'option_variable' => 'TotalAll',
                        'type' => 'number'
                    ],

                    [
                        'id' => 15,
                        'option_name' => '(تاريخ) التي أبلغت عنها في',
                        'option_variable' => 'CommunicatedDate',
                        'type' => 'date'
                    ],
                    [
                        'id' => 16,
                        'option_name' => ' مذكور بناء على التحذير الموجه لها (تاريخ)',
                        'option_variable' => 'AccordanceDate',
                        'type' => 'date'
                    ],
                    [
                        'id' => 17,
                        'option_name' => 'مستخرج من منزل الكائن',
                        'option_variable' => 'ObjectHouse',
                        'type' => 'text'
                    ],
                    [
                        'id' => 18,
                        'option_name' => 'لأقرب جلسة تعقدها للشركة',
                        'option_variable' => 'Company',
                        'type' => 'text'
                    ],
                    [
                        'id' => 19,
                        'option_name' => 'الكائن مقرها الاجتماعي',
                        'option_variable' => 'SocialHeadquarters',
                        'type' => 'text'
                    ],
                    [
                        'id' => 20,
                        'option_name' => 'الحكم بالتعويض عن التماطل قدره',
                        'option_variable' => 'CompensationProcrastination',
                        'type' => 'text'
                    ],
                    [
                        'id' => 21,
                        'option_name' => 'غرامة تهديدية عن كل يوم يتأخر فيه عن التنفيذ قدرها',
                        'option_variable' => 'ThreateningFine',
                        'type' => 'number'
                    ],

                ])
            ],

        ];

        // <!-- ModelCategory::truncate(); -->
        // <!-- ModelFile::truncate(); -->

        ModelCategory::insert($categories);
        ModelFile::insert($files);



        // $model_options = json_encode(
        //     [
        //         [ "clientFullname" => "Ismail" ],
        //         [ "clientAddress" => "Rabat" ],
        //         [ "homeAddress" => "giliz" ],
        //         [ "homeDescription" => "......." ],
        //         [ "startDate" => "22/03/2020" ],
        //         [ "endDate" => "22/03/2020" ],
        //         [ "totalPeriod" => "45" ],
        //         [ "pricePerMonth" => "4" ],
        //         [ "totalPrice" => "75000" ],
        //     ]
        // );
    }
}
