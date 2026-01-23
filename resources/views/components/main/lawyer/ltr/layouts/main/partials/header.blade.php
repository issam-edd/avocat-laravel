<!-- Main Header-->
<header dir="ltr" class="main-header header-style-one">
    <!--Header-Upper-->
    <div class="header-upper">

        <div class="auto-container clearfix">

            <div class="pull-left logo-box">
                <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('images/logos/logo-dark.svg') }}" width="250" alt="Avocats Marrakech"></a></div>
            </div>

            <div class="nav-outer clearfix">
                <!-- Mobile Navigation Toggler -->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div dir="rtl" class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix text-left">

                            <li class="{{ request()->route()->getName() == 'lawyers.show' ? 'current' : '' }}">
                                <a href="{{ route('lawyers.show', $lawyer->slug) }}">{{ __('lawyer.home') }}</a>
                            </li>

                            <li class="{{ request()->route()->getName() == 'lawyers.blogs' ? 'current' : '' }}">
                                <a href="{{ route('lawyers.blogs', $lawyer->slug) }}">{{ __('lawyer.blogs') }}</a>
                            </li>

                            <li class="{{ request()->route()->getName() == 'lawyers.faqs' ? 'current' : '' }}">
                                <a href="{{ route('lawyers.faqs', $lawyer->slug) }}">{{ __('lawyer.faqs') }}</a>
                            </li>

                            <li class="mobile-only {{ request()->route()->getName() == 'lawyers.contact' ? 'current' : '' }}">
                                <a href="{{ route('lawyers.contact', $lawyer->slug) }}">{{ __('lawyer.contact') }}</a>
                            </li>

                            <li class="language-switcher-mobile">
                                @if (session()->get('locale') == 'ar')
                                    <a href="{{ route('language', 'fr') }}">Francais</a>
                                @endif
                                @if (session()->get('locale') == 'fr')
                                    <a href="{{ route('language', 'ar') }}">Arabe</a>
                                @endif
                            </li>

                            <li class="mobile-only language-switcher">
                                <i class="fa fa-chevron-down"></i>
                                <a href="#" >Langue</a>

                                <div class="language-menu">
                                    <a href="{{ route('language', 'ar') }}">Arabe</a>
                                    <a href="{{ route('language', 'fr') }}">Français</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- Main Menu End-->
                <div class="outer-box clearfix">


                    <!-- Phone Box -->
                    <div class="phone-box">
                        <div class="box-inner">
                            <span class="icon flaticon-smartphone-1"></span>
                            {{ __('lawyer.contact_us') }}
                            <strong dir="ltr" style="font-size: 22px; margin-top: -5px">{{ $lawyer->phone_number }}</strong>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{ route('home') }}" title="Home"><img src="{{ asset('images/logos/logo-light.svg') }}" width="250" alt="{{ $lawyer->nom_ar . ' ' . $lawyer->prenom_ar  }}" title="logo"></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->

                <!-- Main Menu End-->
                <div class="outer-box clearfix">

                    <!-- Btn Box -->
                    <!-- <div class="btn-box">
                        <a href="{{ route('lawyers.contact', $lawyer->slug) }}" class="theme-btn btn-style-two"><span class="txt">تواصل معنا</span></a>
                    </div> -->

                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                </div>

            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="{{ route('home') }}"><img src="{{ asset('images/logos/logo-dark.svg') }}" alt="Avocats Marrakech" title="Avocats Marrakech"></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
<!-- End Main Header -->
