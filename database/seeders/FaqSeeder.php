<?php

namespace Database\Seeders;

use App\Models\Faq;
use Database\Factories\FaqFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Faq::factory()->count(100)->create();

        $faqs = [
            [
                "lawyer_id" => 2,
                "question_fr" => 'Quels sont les services juridiques de l\'entreprise ?',
                "question_ar" => 'ما هي خدمات الشركة القانونية؟',
                "answer_fr" => 'Notre cabinet d\'avocats propose une large gamme de services juridiques, notamment des conseils juridiques, la préparation de documents juridiques, la documentation, l\'arbitrage, la médiation, la défense des clients devant les tribunaux, etc. Veuillez nous contacter pour plus de détails sur nos services.',
                "answer_ar" => 'توفر شركتنا القانونية مجموعة واسعة من الخدمات القانونية، بما في ذلك استشارات قانونية وإعداد الوثائق القانونية والتوثيق والتحكيم والوساطة والدفاع عن العملاء في المحاكم والمزيد. يرجى الاتصال بنا للحصول على مزيد من التفاصيل حول الخدمات التي نقدمها.',
            ],
            [
                "lawyer_id" => 2,
                "answer_fr" => 'Nous offrons des conseils juridiques initiaux gratuits aux nouveaux clients. Veuillez nous contacter pour planifier une consultation juridique gratuite.',
                "question_ar" => 'هل يمكنني الحصول على استشارة قانونية مجانية؟',
                "question_fr" => 'Puis-je bénéficier de conseils juridiques gratuits ?',
                "answer_ar" => 'نحن نقدم استشارات قانونية أولية مجانية للعملاء الجدد. يرجى الاتصال بنا لتحديد موعد استشارة قانونية مجانية.',
            ],
            [
                "lawyer_id" => 2,
                "question_fr" => 'Quelles mesures dois-je prendre si j\'ai un accident ou une blessure personnelle?',
                "question_ar" => 'ما هي الخطوات التي يجب اتخاذها إذا تعرضت لحادثة أو إصابة شخصية؟',
                "answer_fr" => 'Si vous subissez un accident ou une blessure corporelle, vous devez obtenir immédiatement les soins médicaux nécessaires, puis contacter notre cabinet d\'avocats pour obtenir des conseils juridiques sur vos droits et les actions en justice qui peuvent être prises. Vous devez également conserver tous les documents et rapports médicaux pertinents et rassembler toute preuve à l\'appui de votre demande d\'indemnisation.',
                "answer_ar" => 'إذا تعرضت لحادثة أو إصابة شخصية، يجب عليك الحصول على الرعاية الطبية اللازمة في الحال، ثم الاتصال بشركتنا القانونية للحصول على استشارة قانونية حول حقوقك والإجراءات القانونية التي يمكن اتخاذها. يجب عليك أيضًا الحفاظ على جميع الوثائق والتقارير الطبية ذات الصلة وجمع أي أدلة تدعم مطالبتك بالتعويض.',
            ],

            [
                "lawyer_id" => 3,
                "question_fr" => 'Quels sont les services juridiques de l\'entreprise ?',
                "question_ar" => 'ما هي خدمات الشركة القانونية؟',
                "answer_fr" => 'Notre cabinet d\'avocats propose une large gamme de services juridiques, notamment des conseils juridiques, la préparation de documents juridiques, la documentation, l\'arbitrage, la médiation, la défense des clients devant les tribunaux, etc. Veuillez nous contacter pour plus de détails sur nos services.',
                "answer_ar" => 'توفر شركتنا القانونية مجموعة واسعة من الخدمات القانونية، بما في ذلك استشارات قانونية وإعداد الوثائق القانونية والتوثيق والتحكيم والوساطة والدفاع عن العملاء في المحاكم والمزيد. يرجى الاتصال بنا للحصول على مزيد من التفاصيل حول الخدمات التي نقدمها.',
            ],
            [
                "lawyer_id" => 3,
                "answer_fr" => 'Nous offrons des conseils juridiques initiaux gratuits aux nouveaux clients. Veuillez nous contacter pour planifier une consultation juridique gratuite.',
                "question_ar" => 'هل يمكنني الحصول على استشارة قانونية مجانية؟',
                "question_fr" => 'Puis-je bénéficier de conseils juridiques gratuits ?',
                "answer_ar" => 'نحن نقدم استشارات قانونية أولية مجانية للعملاء الجدد. يرجى الاتصال بنا لتحديد موعد استشارة قانونية مجانية.',
            ],
            [
                "lawyer_id" => 3,
                "question_fr" => 'Quelles mesures dois-je prendre si j\'ai un accident ou une blessure personnelle?',
                "question_ar" => 'ما هي الخطوات التي يجب اتخاذها إذا تعرضت لحادثة أو إصابة شخصية؟',
                "answer_fr" => 'Si vous subissez un accident ou une blessure corporelle, vous devez obtenir immédiatement les soins médicaux nécessaires, puis contacter notre cabinet d\'avocats pour obtenir des conseils juridiques sur vos droits et les actions en justice qui peuvent être prises. Vous devez également conserver tous les documents et rapports médicaux pertinents et rassembler toute preuve à l\'appui de votre demande d\'indemnisation.',
                "answer_ar" => 'إذا تعرضت لحادثة أو إصابة شخصية، يجب عليك الحصول على الرعاية الطبية اللازمة في الحال، ثم الاتصال بشركتنا القانونية للحصول على استشارة قانونية حول حقوقك والإجراءات القانونية التي يمكن اتخاذها. يجب عليك أيضًا الحفاظ على جميع الوثائق والتقارير الطبية ذات الصلة وجمع أي أدلة تدعم مطالبتك بالتعويض.',
            ],

            [
                "lawyer_id" => 4,
                "question_fr" => 'Quels sont les services juridiques de l\'entreprise ?',
                "question_ar" => 'ما هي خدمات الشركة القانونية؟',
                "answer_fr" => 'Notre cabinet d\'avocats propose une large gamme de services juridiques, notamment des conseils juridiques, la préparation de documents juridiques, la documentation, l\'arbitrage, la médiation, la défense des clients devant les tribunaux, etc. Veuillez nous contacter pour plus de détails sur nos services.',
                "answer_ar" => 'توفر شركتنا القانونية مجموعة واسعة من الخدمات القانونية، بما في ذلك استشارات قانونية وإعداد الوثائق القانونية والتوثيق والتحكيم والوساطة والدفاع عن العملاء في المحاكم والمزيد. يرجى الاتصال بنا للحصول على مزيد من التفاصيل حول الخدمات التي نقدمها.',
            ],
            [
                "lawyer_id" => 4,
                "answer_fr" => 'Nous offrons des conseils juridiques initiaux gratuits aux nouveaux clients. Veuillez nous contacter pour planifier une consultation juridique gratuite.',
                "question_ar" => 'هل يمكنني الحصول على استشارة قانونية مجانية؟',
                "question_fr" => 'Puis-je bénéficier de conseils juridiques gratuits ?',
                "answer_ar" => 'نحن نقدم استشارات قانونية أولية مجانية للعملاء الجدد. يرجى الاتصال بنا لتحديد موعد استشارة قانونية مجانية.',
            ],
            [
                "lawyer_id" => 4,
                "question_fr" => 'Quelles mesures dois-je prendre si j\'ai un accident ou une blessure personnelle?',
                "question_ar" => 'ما هي الخطوات التي يجب اتخاذها إذا تعرضت لحادثة أو إصابة شخصية؟',
                "answer_fr" => 'Si vous subissez un accident ou une blessure corporelle, vous devez obtenir immédiatement les soins médicaux nécessaires, puis contacter notre cabinet d\'avocats pour obtenir des conseils juridiques sur vos droits et les actions en justice qui peuvent être prises. Vous devez également conserver tous les documents et rapports médicaux pertinents et rassembler toute preuve à l\'appui de votre demande d\'indemnisation.',
                "answer_ar" => 'إذا تعرضت لحادثة أو إصابة شخصية، يجب عليك الحصول على الرعاية الطبية اللازمة في الحال، ثم الاتصال بشركتنا القانونية للحصول على استشارة قانونية حول حقوقك والإجراءات القانونية التي يمكن اتخاذها. يجب عليك أيضًا الحفاظ على جميع الوثائق والتقارير الطبية ذات الصلة وجمع أي أدلة تدعم مطالبتك بالتعويض.',
            ],

            [
                "lawyer_id" => 5,
                "question_fr" => 'Quels sont les services juridiques de l\'entreprise ?',
                "question_ar" => 'ما هي خدمات الشركة القانونية؟',
                "answer_fr" => 'Notre cabinet d\'avocats propose une large gamme de services juridiques, notamment des conseils juridiques, la préparation de documents juridiques, la documentation, l\'arbitrage, la médiation, la défense des clients devant les tribunaux, etc. Veuillez nous contacter pour plus de détails sur nos services.',
                "answer_ar" => 'توفر شركتنا القانونية مجموعة واسعة من الخدمات القانونية، بما في ذلك استشارات قانونية وإعداد الوثائق القانونية والتوثيق والتحكيم والوساطة والدفاع عن العملاء في المحاكم والمزيد. يرجى الاتصال بنا للحصول على مزيد من التفاصيل حول الخدمات التي نقدمها.',
            ],
            [
                "lawyer_id" => 5,
                "answer_fr" => 'Nous offrons des conseils juridiques initiaux gratuits aux nouveaux clients. Veuillez nous contacter pour planifier une consultation juridique gratuite.',
                "question_ar" => 'هل يمكنني الحصول على استشارة قانونية مجانية؟',
                "question_fr" => 'Puis-je bénéficier de conseils juridiques gratuits ?',
                "answer_ar" => 'نحن نقدم استشارات قانونية أولية مجانية للعملاء الجدد. يرجى الاتصال بنا لتحديد موعد استشارة قانونية مجانية.',
            ],
            [
                "lawyer_id" => 5,
                "question_fr" => 'Quelles mesures dois-je prendre si j\'ai un accident ou une blessure personnelle?',
                "question_ar" => 'ما هي الخطوات التي يجب اتخاذها إذا تعرضت لحادثة أو إصابة شخصية؟',
                "answer_fr" => 'Si vous subissez un accident ou une blessure corporelle, vous devez obtenir immédiatement les soins médicaux nécessaires, puis contacter notre cabinet d\'avocats pour obtenir des conseils juridiques sur vos droits et les actions en justice qui peuvent être prises. Vous devez également conserver tous les documents et rapports médicaux pertinents et rassembler toute preuve à l\'appui de votre demande d\'indemnisation.',
                "answer_ar" => 'إذا تعرضت لحادثة أو إصابة شخصية، يجب عليك الحصول على الرعاية الطبية اللازمة في الحال، ثم الاتصال بشركتنا القانونية للحصول على استشارة قانونية حول حقوقك والإجراءات القانونية التي يمكن اتخاذها. يجب عليك أيضًا الحفاظ على جميع الوثائق والتقارير الطبية ذات الصلة وجمع أي أدلة تدعم مطالبتك بالتعويض.',
            ],

            [
                "lawyer_id" => 6,
                "question_fr" => 'Quels sont les services juridiques de l\'entreprise ?',
                "question_ar" => 'ما هي خدمات الشركة القانونية؟',
                "answer_fr" => 'Notre cabinet d\'avocats propose une large gamme de services juridiques, notamment des conseils juridiques, la préparation de documents juridiques, la documentation, l\'arbitrage, la médiation, la défense des clients devant les tribunaux, etc. Veuillez nous contacter pour plus de détails sur nos services.',
                "answer_ar" => 'توفر شركتنا القانونية مجموعة واسعة من الخدمات القانونية، بما في ذلك استشارات قانونية وإعداد الوثائق القانونية والتوثيق والتحكيم والوساطة والدفاع عن العملاء في المحاكم والمزيد. يرجى الاتصال بنا للحصول على مزيد من التفاصيل حول الخدمات التي نقدمها.',
            ],
            [
                "lawyer_id" => 6,
                "answer_fr" => 'Nous offrons des conseils juridiques initiaux gratuits aux nouveaux clients. Veuillez nous contacter pour planifier une consultation juridique gratuite.',
                "question_ar" => 'هل يمكنني الحصول على استشارة قانونية مجانية؟',
                "question_fr" => 'Puis-je bénéficier de conseils juridiques gratuits ?',
                "answer_ar" => 'نحن نقدم استشارات قانونية أولية مجانية للعملاء الجدد. يرجى الاتصال بنا لتحديد موعد استشارة قانونية مجانية.',
            ],
            [
                "lawyer_id" => 6,
                "question_fr" => 'Quelles mesures dois-je prendre si j\'ai un accident ou une blessure personnelle?',
                "question_ar" => 'ما هي الخطوات التي يجب اتخاذها إذا تعرضت لحادثة أو إصابة شخصية؟',
                "answer_fr" => 'Si vous subissez un accident ou une blessure corporelle, vous devez obtenir immédiatement les soins médicaux nécessaires, puis contacter notre cabinet d\'avocats pour obtenir des conseils juridiques sur vos droits et les actions en justice qui peuvent être prises. Vous devez également conserver tous les documents et rapports médicaux pertinents et rassembler toute preuve à l\'appui de votre demande d\'indemnisation.',
                "answer_ar" => 'إذا تعرضت لحادثة أو إصابة شخصية، يجب عليك الحصول على الرعاية الطبية اللازمة في الحال، ثم الاتصال بشركتنا القانونية للحصول على استشارة قانونية حول حقوقك والإجراءات القانونية التي يمكن اتخاذها. يجب عليك أيضًا الحفاظ على جميع الوثائق والتقارير الطبية ذات الصلة وجمع أي أدلة تدعم مطالبتك بالتعويض.',
            ],

            [
                "lawyer_id" => 7,
                "question_fr" => 'Quels sont les services juridiques de l\'entreprise ?',
                "question_ar" => 'ما هي خدمات الشركة القانونية؟',
                "answer_fr" => 'Notre cabinet d\'avocats propose une large gamme de services juridiques, notamment des conseils juridiques, la préparation de documents juridiques, la documentation, l\'arbitrage, la médiation, la défense des clients devant les tribunaux, etc. Veuillez nous contacter pour plus de détails sur nos services.',
                "answer_ar" => 'توفر شركتنا القانونية مجموعة واسعة من الخدمات القانونية، بما في ذلك استشارات قانونية وإعداد الوثائق القانونية والتوثيق والتحكيم والوساطة والدفاع عن العملاء في المحاكم والمزيد. يرجى الاتصال بنا للحصول على مزيد من التفاصيل حول الخدمات التي نقدمها.',
            ],
            [
                "lawyer_id" => 7,
                "answer_fr" => 'Nous offrons des conseils juridiques initiaux gratuits aux nouveaux clients. Veuillez nous contacter pour planifier une consultation juridique gratuite.',
                "question_ar" => 'هل يمكنني الحصول على استشارة قانونية مجانية؟',
                "question_fr" => 'Puis-je bénéficier de conseils juridiques gratuits ?',
                "answer_ar" => 'نحن نقدم استشارات قانونية أولية مجانية للعملاء الجدد. يرجى الاتصال بنا لتحديد موعد استشارة قانونية مجانية.',
            ],
            [
                "lawyer_id" => 7,
                "question_fr" => 'Quelles mesures dois-je prendre si j\'ai un accident ou une blessure personnelle?',
                "question_ar" => 'ما هي الخطوات التي يجب اتخاذها إذا تعرضت لحادثة أو إصابة شخصية؟',
                "answer_fr" => 'Si vous subissez un accident ou une blessure corporelle, vous devez obtenir immédiatement les soins médicaux nécessaires, puis contacter notre cabinet d\'avocats pour obtenir des conseils juridiques sur vos droits et les actions en justice qui peuvent être prises. Vous devez également conserver tous les documents et rapports médicaux pertinents et rassembler toute preuve à l\'appui de votre demande d\'indemnisation.',
                "answer_ar" => 'إذا تعرضت لحادثة أو إصابة شخصية، يجب عليك الحصول على الرعاية الطبية اللازمة في الحال، ثم الاتصال بشركتنا القانونية للحصول على استشارة قانونية حول حقوقك والإجراءات القانونية التي يمكن اتخاذها. يجب عليك أيضًا الحفاظ على جميع الوثائق والتقارير الطبية ذات الصلة وجمع أي أدلة تدعم مطالبتك بالتعويض.',
            ],

            [
                "lawyer_id" => 8,
                "question_fr" => 'Quels sont les services juridiques de l\'entreprise ?',
                "question_ar" => 'ما هي خدمات الشركة القانونية؟',
                "answer_fr" => 'Notre cabinet d\'avocats propose une large gamme de services juridiques, notamment des conseils juridiques, la préparation de documents juridiques, la documentation, l\'arbitrage, la médiation, la défense des clients devant les tribunaux, etc. Veuillez nous contacter pour plus de détails sur nos services.',
                "answer_ar" => 'توفر شركتنا القانونية مجموعة واسعة من الخدمات القانونية، بما في ذلك استشارات قانونية وإعداد الوثائق القانونية والتوثيق والتحكيم والوساطة والدفاع عن العملاء في المحاكم والمزيد. يرجى الاتصال بنا للحصول على مزيد من التفاصيل حول الخدمات التي نقدمها.',
            ],
            [
                "lawyer_id" => 8,
                "answer_fr" => 'Nous offrons des conseils juridiques initiaux gratuits aux nouveaux clients. Veuillez nous contacter pour planifier une consultation juridique gratuite.',
                "question_ar" => 'هل يمكنني الحصول على استشارة قانونية مجانية؟',
                "question_fr" => 'Puis-je bénéficier de conseils juridiques gratuits ?',
                "answer_ar" => 'نحن نقدم استشارات قانونية أولية مجانية للعملاء الجدد. يرجى الاتصال بنا لتحديد موعد استشارة قانونية مجانية.',
            ],
            [
                "lawyer_id" => 8,
                "question_fr" => 'Quelles mesures dois-je prendre si j\'ai un accident ou une blessure personnelle?',
                "question_ar" => 'ما هي الخطوات التي يجب اتخاذها إذا تعرضت لحادثة أو إصابة شخصية؟',
                "answer_fr" => 'Si vous subissez un accident ou une blessure corporelle, vous devez obtenir immédiatement les soins médicaux nécessaires, puis contacter notre cabinet d\'avocats pour obtenir des conseils juridiques sur vos droits et les actions en justice qui peuvent être prises. Vous devez également conserver tous les documents et rapports médicaux pertinents et rassembler toute preuve à l\'appui de votre demande d\'indemnisation.',
                "answer_ar" => 'إذا تعرضت لحادثة أو إصابة شخصية، يجب عليك الحصول على الرعاية الطبية اللازمة في الحال، ثم الاتصال بشركتنا القانونية للحصول على استشارة قانونية حول حقوقك والإجراءات القانونية التي يمكن اتخاذها. يجب عليك أيضًا الحفاظ على جميع الوثائق والتقارير الطبية ذات الصلة وجمع أي أدلة تدعم مطالبتك بالتعويض.',
            ],

            [
                "lawyer_id" => 9,
                "question_fr" => 'Quels sont les services juridiques de l\'entreprise ?',
                "question_ar" => 'ما هي خدمات الشركة القانونية؟',
                "answer_fr" => 'Notre cabinet d\'avocats propose une large gamme de services juridiques, notamment des conseils juridiques, la préparation de documents juridiques, la documentation, l\'arbitrage, la médiation, la défense des clients devant les tribunaux, etc. Veuillez nous contacter pour plus de détails sur nos services.',
                "answer_ar" => 'توفر شركتنا القانونية مجموعة واسعة من الخدمات القانونية، بما في ذلك استشارات قانونية وإعداد الوثائق القانونية والتوثيق والتحكيم والوساطة والدفاع عن العملاء في المحاكم والمزيد. يرجى الاتصال بنا للحصول على مزيد من التفاصيل حول الخدمات التي نقدمها.',
            ],
            [
                "lawyer_id" => 9,
                "answer_fr" => 'Nous offrons des conseils juridiques initiaux gratuits aux nouveaux clients. Veuillez nous contacter pour planifier une consultation juridique gratuite.',
                "question_ar" => 'هل يمكنني الحصول على استشارة قانونية مجانية؟',
                "question_fr" => 'Puis-je bénéficier de conseils juridiques gratuits ?',
                "answer_ar" => 'نحن نقدم استشارات قانونية أولية مجانية للعملاء الجدد. يرجى الاتصال بنا لتحديد موعد استشارة قانونية مجانية.',
            ],
            [
                "lawyer_id" => 9,
                "question_fr" => 'Quelles mesures dois-je prendre si j\'ai un accident ou une blessure personnelle?',
                "question_ar" => 'ما هي الخطوات التي يجب اتخاذها إذا تعرضت لحادثة أو إصابة شخصية؟',
                "answer_fr" => 'Si vous subissez un accident ou une blessure corporelle, vous devez obtenir immédiatement les soins médicaux nécessaires, puis contacter notre cabinet d\'avocats pour obtenir des conseils juridiques sur vos droits et les actions en justice qui peuvent être prises. Vous devez également conserver tous les documents et rapports médicaux pertinents et rassembler toute preuve à l\'appui de votre demande d\'indemnisation.',
                "answer_ar" => 'إذا تعرضت لحادثة أو إصابة شخصية، يجب عليك الحصول على الرعاية الطبية اللازمة في الحال، ثم الاتصال بشركتنا القانونية للحصول على استشارة قانونية حول حقوقك والإجراءات القانونية التي يمكن اتخاذها. يجب عليك أيضًا الحفاظ على جميع الوثائق والتقارير الطبية ذات الصلة وجمع أي أدلة تدعم مطالبتك بالتعويض.',
            ],

            [
                "lawyer_id" => 10,
                "question_fr" => 'Quels sont les services juridiques de l\'entreprise ?',
                "question_ar" => 'ما هي خدمات الشركة القانونية؟',
                "answer_fr" => 'Notre cabinet d\'avocats propose une large gamme de services juridiques, notamment des conseils juridiques, la préparation de documents juridiques, la documentation, l\'arbitrage, la médiation, la défense des clients devant les tribunaux, etc. Veuillez nous contacter pour plus de détails sur nos services.',
                "answer_ar" => 'توفر شركتنا القانونية مجموعة واسعة من الخدمات القانونية، بما في ذلك استشارات قانونية وإعداد الوثائق القانونية والتوثيق والتحكيم والوساطة والدفاع عن العملاء في المحاكم والمزيد. يرجى الاتصال بنا للحصول على مزيد من التفاصيل حول الخدمات التي نقدمها.',
            ],
            [
                "lawyer_id" => 10,
                "answer_fr" => 'Nous offrons des conseils juridiques initiaux gratuits aux nouveaux clients. Veuillez nous contacter pour planifier une consultation juridique gratuite.',
                "question_ar" => 'هل يمكنني الحصول على استشارة قانونية مجانية؟',
                "question_fr" => 'Puis-je bénéficier de conseils juridiques gratuits ?',
                "answer_ar" => 'نحن نقدم استشارات قانونية أولية مجانية للعملاء الجدد. يرجى الاتصال بنا لتحديد موعد استشارة قانونية مجانية.',
            ],
            [
                "lawyer_id" => 10,
                "question_fr" => 'Quelles mesures dois-je prendre si j\'ai un accident ou une blessure personnelle?',
                "question_ar" => 'ما هي الخطوات التي يجب اتخاذها إذا تعرضت لحادثة أو إصابة شخصية؟',
                "answer_fr" => 'Si vous subissez un accident ou une blessure corporelle, vous devez obtenir immédiatement les soins médicaux nécessaires, puis contacter notre cabinet d\'avocats pour obtenir des conseils juridiques sur vos droits et les actions en justice qui peuvent être prises. Vous devez également conserver tous les documents et rapports médicaux pertinents et rassembler toute preuve à l\'appui de votre demande d\'indemnisation.',
                "answer_ar" => 'إذا تعرضت لحادثة أو إصابة شخصية، يجب عليك الحصول على الرعاية الطبية اللازمة في الحال، ثم الاتصال بشركتنا القانونية للحصول على استشارة قانونية حول حقوقك والإجراءات القانونية التي يمكن اتخاذها. يجب عليك أيضًا الحفاظ على جميع الوثائق والتقارير الطبية ذات الصلة وجمع أي أدلة تدعم مطالبتك بالتعويض.',
            ],

            // -------------
            [
                "lawyer_id" => 12,
                "question_fr" => 'Quels sont les services juridiques de l\'entreprise ?',
                "question_ar" => 'ما هي خدمات الشركة القانونية؟',
                "answer_fr" => 'Notre cabinet d\'avocats propose une large gamme de services juridiques, notamment des conseils juridiques, la préparation de documents juridiques, la documentation, l\'arbitrage, la médiation, la défense des clients devant les tribunaux, etc. Veuillez nous contacter pour plus de détails sur nos services.',
                "answer_ar" => 'توفر شركتنا القانونية مجموعة واسعة من الخدمات القانونية، بما في ذلك استشارات قانونية وإعداد الوثائق القانونية والتوثيق والتحكيم والوساطة والدفاع عن العملاء في المحاكم والمزيد. يرجى الاتصال بنا للحصول على مزيد من التفاصيل حول الخدمات التي نقدمها.',
            ],
            [
                "lawyer_id" => 12,
                "answer_fr" => 'Nous offrons des conseils juridiques initiaux gratuits aux nouveaux clients. Veuillez nous contacter pour planifier une consultation juridique gratuite.',
                "question_ar" => 'هل يمكنني الحصول على استشارة قانونية مجانية؟',
                "question_fr" => 'Puis-je bénéficier de conseils juridiques gratuits ?',
                "answer_ar" => 'نحن نقدم استشارات قانونية أولية مجانية للعملاء الجدد. يرجى الاتصال بنا لتحديد موعد استشارة قانونية مجانية.',
            ],
            [
                "lawyer_id" => 12,
                "question_fr" => 'Quelles mesures dois-je prendre si j\'ai un accident ou une blessure personnelle?',
                "question_ar" => 'ما هي الخطوات التي يجب اتخاذها إذا تعرضت لحادثة أو إصابة شخصية؟',
                "answer_fr" => 'Si vous subissez un accident ou une blessure corporelle, vous devez obtenir immédiatement les soins médicaux nécessaires, puis contacter notre cabinet d\'avocats pour obtenir des conseils juridiques sur vos droits et les actions en justice qui peuvent être prises. Vous devez également conserver tous les documents et rapports médicaux pertinents et rassembler toute preuve à l\'appui de votre demande d\'indemnisation.',
                "answer_ar" => 'إذا تعرضت لحادثة أو إصابة شخصية، يجب عليك الحصول على الرعاية الطبية اللازمة في الحال، ثم الاتصال بشركتنا القانونية للحصول على استشارة قانونية حول حقوقك والإجراءات القانونية التي يمكن اتخاذها. يجب عليك أيضًا الحفاظ على جميع الوثائق والتقارير الطبية ذات الصلة وجمع أي أدلة تدعم مطالبتك بالتعويض.',
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
