<!-- ============================ Footer Start ================================== -->
<footer dir="ltr" class="dark-footer skin-dark-footer style-2 text-left">
    <div class="footer-middle">
        <div class="container">
            <div class="row">

                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="footer_widget">
                        <img src="{{ asset('images/logos/logo-dark.svg') }}" class="img-footer small mb-2" alt="Avocats Marrakech" style="min-width: 210px; margin-bottom: 5px" />

                        <p style="color: #c1c1c">
                            @if (isset($options['description_fr']))
                                {{ $options['description_fr'] ?? '' }}
                            @else
                                Votre ressource pour trouver des avocats professionnels à Marrakech. Nous fournissons des informations détaillées sur les cabinets les plus qualifiés à Marrakech et des ressources juridiques utiles pour mieux comprendre vos droits et obligations.
                            @endif
                        </p>

                        {{-- <div class="address mt-2">
                            {{ $options['localisation'] ?? '' }}
                        </div>
                        <div class="address mt-3">
                            {{ $options['addresse1'] ?? '' }} <br />
                            {{ $options['addresse2'] ?? '' }}
                        </div> --}}
                        <!-- <div class="address mt-2">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#" class="text-white"><i class="lni lni-facebook-filled"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="text-white"><i class="lni lni-twitter-filled"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="text-white"><i class="lni lni-youtube"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="text-white"><i class="lni lni-instagram-filled"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="text-white"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title">{{ __('siteweb.about') }}</h4>
                        <ul class="footer-menu">
                            <li>
                                <a href="{{ route('home') }}">
                                    {{ __('siteweb.home') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('faq') }}">
                                    {{ __('siteweb.faq') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">
                                    {{ __('siteweb.contact') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">
                                    {{ __('siteweb.about') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title">{{ __('siteweb.links') }}</h4>
                        <ul class="footer-menu">
                            <li>
                                <a href="{{ route('lawyers') }}">
                                    {{ __('siteweb.lawyers') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('blogs') }}">
                                    {{ __('siteweb.blogs') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom br-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 text-center">
                    <p class="mb-0">{{ __('siteweb.copyright') }}
                        <script>
                            document.write((new Date()).getFullYear())
                        </script>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ============================ Footer End ================================== -->
