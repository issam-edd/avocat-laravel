<div dir="rtl" class="inner-column text-right">
    <div class="sec-title light">
        <h2>الأسئلة الشائعة</h2>
        <!-- <div class="text">Tonam rem aperiam, eaque ipsa quae ab illo inventoe veritatis et quasi architecto beatae vitae dicta sunt explicabo exercitationem ullam corporis.</div> -->
    </div>

    <ul class="accordion-box">


        @if (!!$faq_one)
            <!-- Block -->
            <li class="accordion block active-block">
                <div class="acc-btn active">
                    {{ $faq_one->question_ar }}
                    <div class="icon-outer"><span class="icon icon-plus flaticon-plus"></span> <span
                            class="icon icon-minus fa fa-minus"></span></div>
                </div>
                <div class="acc-content current">
                    <div class="content">
                        <div class="accordian-text">
                            {{ $faq_one->answer_ar }}
                        </div>
                    </div>
                </div>
            </li>
        @else
            <!-- Block -->
            <li class="accordion block active-block">
                <div class="acc-btn active">
                    ما هي خدمات الشركة القانونية؟
                    <div class="icon-outer"><span class="icon icon-plus flaticon-plus"></span> <span
                            class="icon icon-minus fa fa-minus"></span></div>
                </div>
                <div class="acc-content current">
                    <div class="content">
                        <div class="accordian-text">
                            توفر شركتنا القانونية مجموعة واسعة من الخدمات القانونية، بما في ذلك استشارات قانونية وإعداد
                            الوثائق القانونية والتوثيق والتحكيم والوساطة والدفاع عن العملاء في المحاكم والمزيد. يرجى
                            الاتصال بنا للحصول على مزيد من التفاصيل حول الخدمات التي نقدمها.
                        </div>
                    </div>
                </div>
            </li>
        @endif

        @if (!!$faq_two)
            <!-- Block -->
            <li class="accordion block">
                <div class="acc-btn">
                    {{ $faq_two->question_ar }}
                    <div class="icon-outer">
                        <span class="icon icon-plus flaticon-plus"></span>
                        <span class="icon icon-minus fa fa-minus"></span>
                    </div>
                </div>
                <div class="acc-content">
                    <div class="content">
                        <div class="accordian-text">
                            {{ $faq_two->answer_ar }}
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
                    هل يمكنني الحصول على استشارة قانونية مجانية؟
                </div>
                <div class="acc-content">
                    <div class="content">
                        <div class="accordian-text">
                            نحن نقدم استشارات قانونية أولية مجانية للعملاء الجدد. يرجى الاتصال بنا لتحديد موعد استشارة
                            قانونية مجانية.
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
                    {{ $faq_three->question_ar }}
                </div>
                <div class="acc-content">
                    <div class="content">
                        <div class="accordian-text">
                            {{ $faq_three->answer_ar }}
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
                    ما هي الخطوات التي يجب اتخاذها إذا تعرضت لحادثة أو إصابة شخصية؟
                </div>
                <div class="acc-content">
                    <div class="content">
                        <div class="accordian-text">
                            إذا تعرضت لحادثة أو إصابة شخصية، يجب عليك الحصول على الرعاية الطبية اللازمة في الحال، ثم
                            الاتصال بشركتنا القانونية للحصول على استشارة قانونية حول حقوقك والإجراءات القانونية التي
                            يمكن اتخاذها. يجب عليك أيضًا الحفاظ على جميع الوثائق والتقارير الطبية ذات الصلة وجمع أي أدلة
                            تدعم مطالبتك بالتعويض.
                        </div>
                    </div>
                </div>
            </li>
        @endif


    </ul>

</div>
