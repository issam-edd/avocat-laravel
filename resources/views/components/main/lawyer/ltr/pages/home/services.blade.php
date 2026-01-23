<!-- Services Section -->
<section dir="ltr" class="services-section text-left">
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
                                @if(!!$lawyer->lawyerLandingPage->service_one_title)
                                    {!! $lawyer->lawyerLandingPage->service_one_title !!}
                                @else
                                    Droit des sociétés et des affaires
                                @endif
                                </a>
                            </h4>
                            <div class="text">
                                @if(!!$lawyer->lawyerLandingPage->service_one_description)
                                    {!! $lawyer->lawyerLandingPage->service_one_description !!}
                                @else
                                    Nous fournissons des services de droit des sociétés et des affaires, y compris la création de sociétés et l'assistance aux transactions commerciales.
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
                                @if(!!$lawyer->lawyerLandingPage->service_two_title)
                                {!! $lawyer->lawyerLandingPage->service_two_title !!}
                                @else
                                    Droit immobilier
                                @endif
                                </a>
                            </h4>
                            <div class="text">
                                @if(!!$lawyer->lawyerLandingPage->service_two_description)
                                {!! $lawyer->lawyerLandingPage->service_two_description !!}
                                @else
                                Nous fournissons des services de droit immobilier, y compris une assistance à l'achat, à la vente, à la location et à la légalisation.
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
                                @if(!!$lawyer->lawyerLandingPage->service_three_title)
                                    {!! $lawyer->lawyerLandingPage->service_three_title !!}
                                @else
                                    Droit des assurances
                                @endif
                                </a>
                            </h4>
                            <div class="text">
                                @if(!!$lawyer->lawyerLandingPage->service_three_description)
                                {!! $lawyer->lawyerLandingPage->service_three_description !!}
                                @else
                                Nous fournissons des services de droit des assurances, y compris une assistance pour les réclamations et l'obtention d'une indemnisation.
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
                                @if(!!$lawyer->lawyerLandingPage->service_four_title)
                                    {!! $lawyer->lawyerLandingPage->service_four_title !!}
                                @else
                                    Droit de la famille
                                @endif
                                </a>
                            </h4>
                            <div class="text">
                                @if(!!$lawyer->lawyerLandingPage->service_four_description)
                                {!! $lawyer->lawyerLandingPage->service_four_description !!}
                                @else
                                    Nous fournissons des services en droit de la famille, y compris une assistance en matière de divorce, de garde d'enfants et de droits de la famille.
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
