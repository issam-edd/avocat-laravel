<!-- Counter Section -->
<section dir="ltr" class="counter-section text-left">

    <div class="edit-zone">
        <a href="{{ route("lawyer.settings.landing.page.section.show",4) }}">
            Edit
        </a>
    </div>

    <div class="image-layer" style="background-image: url('{{ asset(!!$lawyer->lawyerLandingPage->hero_background ? $lawyer->lawyerLandingPage->hero_background : 'assets/main/lawyer/images/background/2.jpg') }}'); background-size: cover; background-position: top "></div>
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title light centered">
            <h2>
                {{ !!$lawyer->lawyerLandingPage->counter_years_experience ? $lawyer->lawyerLandingPage->counter_years_experience : 20 }}
                 ans d'expérience dans le domaine des affaires juridiques
            </h2>
        </div>

        <div class="fact-counter">
            <div class="row clearfix">

                <!-- Column -->
                <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon flaticon-briefcase"></div>
                            <h6 class="counter-title">
                                {{ __('lawyer.partners') }}
                            </h6>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="2500" data-stop="{{!!$lawyer->lawyerLandingPage->counter_partners ? $lawyer->lawyerLandingPage->counter_partners : 250}}">0</span><sup>+</sup>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column -->
                <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <h6 class="counter-title">
                                {{ __('lawyer.open_cases') }}
                            </h6>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="2500" data-stop="{{!!$lawyer->lawyerLandingPage->counter_cases ? $lawyer->lawyerLandingPage->counter_cases : 250}}">0</span><sup>+</sup>
                            </div>
                            <div class="icon flaticon-balance"></div>
                        </div>
                    </div>
                </div>

                <!-- Column -->
                <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <h6 class="counter-title">
                                {{ __('lawyer.satisfed_clients') }}
                            </h6>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="2500" data-stop="{{!!$lawyer->lawyerLandingPage->counter_clients ? $lawyer->lawyerLandingPage->counter_clients : 250}}">0</span><sup>+</sup>
                            </div>
                            <div class="icon flaticon-marketing""></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- End Counter Section -->
