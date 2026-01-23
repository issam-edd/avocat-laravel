<!-- Main Footer -->
<footer class="main-footer text-left" dir="ltr">
    <div class="auto-container">
        <!-- Widgets Section -->
        <div class="widgets-section">
            <!-- Scroll To Top -->
            <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
            <div class="row clearfix">

                <!-- Big Column -->
                <div class="big-column col-lg-8 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-8 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href="{{ route('home') }}"><img src="{{ asset('images/logos/logo-dark.svg') }}" width="250" alt="Avocats Marrakech" /></a>
                                </div>
                                <div>
                                    <p style="color: #8fa4c2;">
                                        @if (isset($main_options['description_fr']))
                                            {{ $main_options['description_fr'] ?? '' }}
                                        @else
                                            Votre ressource pour trouver des avocats professionnels à Marrakech. Nous fournissons des informations détaillées sur les cabinets les plus qualifiés à Marrakech et des ressources juridiques utiles pour mieux comprendre vos droits et obligations.
                                        @endif
                                    </p>
                                </div>
                                <div class="text"></div>
                                <!-- Social Nav -->
                                <!-- <ul class="social-nav">
                                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                </ul> -->
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h5>{{ __('lawyer.links') }}</h5>
                                <ul class="footer-list">
                                    <li><a href="{{ route('lawyers.show', $lawyer->slug) }}">{{ __('lawyer.home') }}</a></li>
                                    <li><a href="{{ route('lawyers.blogs', $lawyer->slug) }}">{{ __('lawyer.blogs') }}</a></li>
                                    <li><a href="{{ route('lawyers.faqs', $lawyer->slug) }}">{{ __('lawyer.faqs') }}</a></li>
                                    <li><a href="{{ route('lawyers.contact', $lawyer->slug) }}">{{ __('lawyer.contact') }}</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Big Column -->
                <div dir="ltr" class="big-column col-lg-4 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-12 col-md-6 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <h5>{{ __('lawyer.office_info') }}</h5>
                                <ul>

                                    @if(isset($options->phone_number_one) && !is_null($options->phone_number_one))
                                        <li>
                                            <span class="icon flaticon-call-1"></span>
                                            <a href="tel:{{ $options->phone_number_one ?? '' }}">{{ $options->phone_number_one ?? '' }}</a>
                                        </li>
                                    @endif

                                    @if(isset($options->phone_number_two) && !is_null($options->phone_number_two))
                                        <li>
                                            <span class="icon flaticon-call-1"></span>
                                            <a href="tel:{{ $options->phone_number_two ?? '' }}">{{ $options->phone_number_two ?? '' }}</a>
                                        </li>
                                    @endif

                                    @if(isset($options->email_address_one) && !is_null($options->email_address_one))
                                        <li>
                                            <span class="icon flaticon-email-2"></span>
                                            <a href="mailto:{{ $options->email_address_one ?? '' }}">{{ $options->email_address_one ?? '' }}</a>
                                        </li>
                                    @endif

                                    @if(isset($options->email_address_two) && !is_null($options->email_address_two))
                                        <li>
                                            <span class="icon flaticon-email-2"></span>
                                            <a href="mailto:{{ $options->email_address_two ?? '' }}">{{ $options->email_address_two ?? '' }}</a>
                                        </li>
                                    @endif

                                    @if(isset($options->address) && !is_null($options->address))
                                        <li>
                                            <span class="icon flaticon-maps-and-flags"></span>
                                            {{ $options->address ?? '' }}
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright">
                Copyright
                <script>
                    document.write((new Date()).getFullYear())
                </script>
                .
                Tous droits réservés Avocats Marrakech.
            </div>
        </div>
    </div>
</footer>
