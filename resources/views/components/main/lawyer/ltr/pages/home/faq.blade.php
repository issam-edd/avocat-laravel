<div class="inner-column">
    <div class="sec-title light">
        <h2>{{ __('lawyer.frequently_questions') }}</h2>
        <!-- <div class="text">Tonam rem aperiam, eaque ipsa quae ab illo inventoe veritatis et quasi architecto beatae vitae dicta sunt explicabo exercitationem ullam corporis.</div> -->
    </div>
    <!-- Accordian Box -->
    <ul class="accordion-box">


        @if (!!$faq_one)
            <!-- Block -->
            <li class="accordion block active-block">
                <div class="acc-btn active">
                    {{ $faq_one->question_fr }}
                    <div class="icon-outer"><span class="icon icon-plus flaticon-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                </div>
                <div class="acc-content current">
                    <div class="content">
                        <div class="accordian-text">
                            {{ $faq_one->answer_fr }}
                        </div>
                    </div>
                </div>
            </li>
        @else
            <!-- Block -->
            <li class="accordion block active-block">
                <div class="acc-btn active">
                    QUELS SONT LES SERVICES JURIDIQUES DE L'ENTREPRISE ?
                    <div class="icon-outer"><span class="icon icon-plus flaticon-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                </div>
                <div class="acc-content current">
                    <div class="content">
                        <div class="accordian-text">
                            Notre cabinet d'avocats propose une large gamme de services juridiques, notamment des conseils juridiques, la préparation de documents juridiques, la documentation, l'arbitrage, la médiation, la défense des clients devant les tribunaux, etc. Veuillez nous contacter pour plus de détails sur nos services.
                        </div>
                    </div>
                </div>
            </li>
        @endif

        @if (!!$faq_two)

            <!-- Block -->
            <li class="accordion block">
                <div class="acc-btn">
                    {{ $faq_two->question_fr }}
                    <div class="icon-outer">
                        <span class="icon icon-plus flaticon-plus"></span>
                        <span class="icon icon-minus fa fa-minus"></span>
                    </div>
                    </div>
                <div class="acc-content">
                    <div class="content">
                        <div class="accordian-text">
                            {{ $faq_two->answer_fr }}
                        </div>
                    </div>
                </div>
            </li>

        @else

            <!-- Block -->
            <li class="accordion block">
                <div class="acc-btn">
                    <div class="icon-outer">
                        <span class="icon icon-plus flaticon-plus"></span>
                        <span class="icon icon-minus fa fa-minus"></span>
                    </div>
                    PUIS-JE BÉNÉFICIER DE CONSEILS JURIDIQUES GRATUITS ?
                </div>
                <div class="acc-content">
                    <div class="content">
                        <div class="accordian-text">
                            Nous offrons des conseils juridiques initiaux gratuits aux nouveaux clients. Veuillez nous contacter pour planifier une consultation juridique gratuite.
                        </div>
                    </div>
                </div>
            </li>
        @endif

        @if (!!$faq_three)
            <!-- Block -->
            <li class="accordion block">
                <div class="acc-btn">
                    <div class="icon-outer">
                        <span class="icon icon-plus flaticon-plus"></span>
                        <span class="icon icon-minus fa fa-minus"></span>
                    </div>
                    {{ $faq_three->question_fr }}
                </div>
                <div class="acc-content">
                    <div class="content">
                        <div class="accordian-text">
                            {{ $faq_three->answer_fr }}
                        </div>
                    </div>
                </div>
            </li>
        @else
            <!-- Block -->
            <li class="accordion block">
                <div class="acc-btn">
                    <div class="icon-outer">
                        <span class="icon icon-plus flaticon-plus"></span>
                        <span class="icon icon-minus fa fa-minus"></span>
                    </div>
                    QUELLES MESURES DOIS-JE PRENDRE SI J'AI UN ACCIDENT OU UNE BLESSURE PERSONNELLE?
                </div>
                <div class="acc-content">
                    <div class="content">
                        <div class="accordian-text">
                            Si vous subissez un accident ou une blessure corporelle, vous devez obtenir immédiatement les soins médicaux nécessaires, puis contacter notre cabinet d'avocats pour obtenir des conseils juridiques sur vos droits et les actions en justice qui peuvent être prises. Vous devez également conserver tous les documents et rapports médicaux pertinents et rassembler toute preuve à l'appui de votre demande d'indemnisation.
                        </div>
                    </div>
                </div>
            </li>
        @endif


    </ul>

</div>
