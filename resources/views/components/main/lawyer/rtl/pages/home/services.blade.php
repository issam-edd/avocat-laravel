<!-- Services Section -->
<section dir="rtl" class="services-section text-right">
    <div class="auto-container">
        <div class="inner-container">

            <div class="edit-zone">
                <a href="{{ route("lawyer.settings.landing.page.section.show",2) }}">
                    Edit
                </a>
            </div>

            <div class="row clearfix">

                <!-- Services Block -->
                <div class="services-block col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon flaticon-file"></div>
                            <h4>
                                <a>
                                @if(!!$lawyer->lawyerLandingPage->service_one_title_ar)
                                    {!! $lawyer->lawyerLandingPage->service_one_title_ar !!}
                                @else
                                    قانون الشركات والأعمال
                                @endif
                                </a>
                            </h4>
                            <div class="text">
                                @if(!!$lawyer->lawyerLandingPage->service_one_description_ar)
                                    {!! $lawyer->lawyerLandingPage->service_one_description_ar !!}
                                @else
                                    نوفر خدمات قانون الشركات والأعمال، بما في ذلك تأسيس الشركات والمساعدة في التعاملات التجارية.
                                @endif
                            </div>
                        </div>
                        <!-- <a class="arrow flaticon-right"></a> -->
                    </div>
                </div>

                <!-- Services Block -->
                <div class="services-block col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon flaticon-file-1"></div>


                                <h4>
                                <a>
                                @if(!!$lawyer->lawyerLandingPage->service_two_title_ar)
                                {!! $lawyer->lawyerLandingPage->service_two_title_ar !!}
                                @else
                                    قانون العقارات
                                @endif
                                </a>
                            </h4>
                            <div class="text">
                                @if(!!$lawyer->lawyerLandingPage->service_two_description_ar)
                                {!! $lawyer->lawyerLandingPage->service_two_description_ar !!}
                                @else
                                    نوفر خدمات قانون العقارات، بما في ذلك المساعدة في عمليات الشراء والبيع والإيجار والتقنين.
                                @endif
                            </div>
                        </div>
                        <!-- <a class="arrow flaticon-right"></a> -->
                    </div>
                </div>

                <!-- Services Block -->
                <div class="services-block col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon flaticon-umbrella-1"></div>


                            <h4>
                                <a>
                                @if(!!$lawyer->lawyerLandingPage->service_three_title_ar)
                                    {!! $lawyer->lawyerLandingPage->service_three_title_ar !!}
                                @else
                                    قانون التأمينات
                                @endif
                                </a>
                            </h4>
                            <div class="text">
                                @if(!!$lawyer->lawyerLandingPage->service_three_description_ar)
                                {!! $lawyer->lawyerLandingPage->service_three_description_ar !!}
                                @else
                                    نوفر خدمات قانون التأمينات، بما في ذلك المساعدة في تقديم المطالبات والحصول على التعويضات.
                                @endif
                            </div>
                        </div>
                        <!-- <a class="arrow flaticon-right"></a> -->
                    </div>
                </div>

                <!-- Services Block -->
                <div class="services-block col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="150ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon flaticon-group"></div>

                            <h4>
                                <a>
                                @if(!!$lawyer->lawyerLandingPage->service_four_title_ar)
                                    {!! $lawyer->lawyerLandingPage->service_four_title_ar !!}
                                @else
                                    قانون الأسرة
                                @endif
                                </a>
                            </h4>
                            <div class="text">
                                @if(!!$lawyer->lawyerLandingPage->service_four_description_ar)
                                {!! $lawyer->lawyerLandingPage->service_four_description_ar !!}
                                @else
                                    نوفر خدمات قانون الأسرة، بما في ذلك المساعدة في قضايا الطلاق وحضانة الأطفال وحقوق الأسرة.
                                @endif
                            </div>
                        </div>
                        <!-- <a class="arrow flaticon-right"></a> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Services Section -->
