<div dir="ltr" class="header header-light head-shadow position-relative overflow-hidden">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape custom-header">
            <div class="nav-header">
                <a class="nav-brand" href="{{ route('home') }}">
                    <img style="max-width: none" width="230" src="{{ asset('images/logos/logo-light.svg') }}" class="logo" alt="" />
                </a>
                <div class="nav-toggle"></div>
                <div class="mobile_nav ">
                    <ul class="d-flex align-items-center justify-content-center h-100">
                        <li class="">
                            @if($is_admin)
                                <a dir="rtl" href="{{ route('admin.index') }}" class="ft-medium">
                                    <i class="lni lni-grid-alt ml-2"></i>
                                </a>
                            @elseif($is_lawyer)
                                <a dir="rtl" href="{{ route('lawyer.index') }}" class="ft-medium">
                                    <i class="lni lni-grid-alt ml-2"></i>
                                </a>
                            @else
                                <a dir="rtl" href="{{ route('login') }}" class="ft-medium">
                                    <i class="lni lni-user ml-2"></i>
                                </a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nav-menus-wrapper custom-header-menu" style="transition-property: none;">
                <ul class="nav-menu mobile-reverse">


                    <li class="rtl-nav-link mr-2">
                        <a href="{{ route('language', 'fr') }}">الفرنسية</a>
                    </li>

                    <li class="rtl-nav-link login-menu">
                        <a href="{{ route('contact') }}">تواصل معنا</a>
                    </li>

                    <li class="rtl-nav-link">
                        <a href="{{ route('faq') }}">سؤال جواب</a>
                    </li>

                    <li class="rtl-nav-link">
                        <a href="{{ route('blogs') }}">المقالات</a>
                    </li>


                    <li class="rtl-nav-link">
                        <a href="{{ route('lawyers') }}">المحامون</a>
                    </li>

                    <li class="rtl-nav-link">
                        <a href="{{ route('home') }}">الرئيسية</a>
                    </li>

                </ul>

                <ul class="nav-menu nav-menu-social login-menu align-to-right">
                    <li>
                        @if($is_admin)
                            <a dir="rtl" href="{{ route('admin.index') }}" class="ft-medium">
                                <i class="lni lni-grid-alt ml-2"></i>
                                لوحة التحكم
                            </a>
                        @elseif($is_lawyer)
                            <a dir="rtl" href="{{ route('lawyer.index') }}" class="ft-medium">
                                <i class="lni lni-grid-alt ml-2"></i>
                                لوحة التحكم
                            </a>
                        @else
                            <a dir="rtl" href="{{ route('login') }}" class="ft-medium">
                                <i class="lni lni-user ml-2"></i>تسجيل الدخول
                            </a>
                        @endif
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
