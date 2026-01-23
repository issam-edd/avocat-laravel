<div class="header header-light dark-text">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand" href="{{ route('home') }}">
                    <img style="max-width: none" width="210" src="{{ asset('images/logos/logo-light.svg') }}" class="logo" alt="" />
                </a>
                <div class="nav-toggle"></div>
                <div class="mobile_nav">
                    <ul>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#login" class="theme-cl fs-lg">
                            <i class="lni lni-user"></i>
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">
                <ul class="nav-menu">

                    <li>
                        <a href="{{ route('home') }}">
                            {{ __('siteweb.home') }}
                        </a>
                    </li>

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

                    <li class="ml-3 login-menu">
                        <a href="{{ route('language', 'ar') }}">Arabe</a>
                    </li>

                </ul>

                <ul class="nav-menu nav-menu-social align-to-right">
                    <li>
                        @if($is_admin)
                            <a dir="ltr" href="{{ route('admin.index') }}" class="ft-medium">
                                <i class="lni lni-grid-alt ml-2"></i>
                                Dashboard
                            </a>
                        @elseif($is_lawyer)
                            <a dir="ltr" href="{{ route('lawyer.index') }}" class="ft-medium">
                                <i class="lni lni-grid-alt ml-2"></i>
                                Dashboard
                            </a>
                        @else
                            <a dir="ltr" href="{{ route('login') }}" class="ft-medium">
                                <i class="lni lni-user ml-2"></i>
                                Login
                            </a>
                        @endif
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

