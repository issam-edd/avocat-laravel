<div class="navbar-custom">
    <div class="topbar container-fluid">
        <div class="d-flex align-items-center gap-lg-2 gap-1">

            <!-- Topbar Brand Logo -->
            <div class="logo-topbar">
                <!-- Logo light -->
                <a href="{{ route("home") }}" class="logo-light">
                    <span class="logo-lg">
                        <img src="{{ asset('images/logos/logo-dark.svg') }}" alt="logo">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('images/logos/logo-sm.png') }}" alt="small logo">
                    </span>
                </a>

                <!-- Logo Dark -->
                <a href="{{ route("home") }}" class="logo-dark">
                    <span class="logo-lg">
                        <img src="{{ asset('images/logos/logo-light.svg') }}" alt="dark logo">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('images/logos/logo-sm.png') }}" alt="small logo">
                    </span>
                </a>
            </div>

            <!-- Sidebar Menu Toggle Button -->
            <button class="button-toggle-menu">
                <i class="mdi mdi-menu"></i>
            </button>

            <!-- Horizontal Menu Toggle Button -->
            <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>


        </div>

        <ul class="topbar-menu d-flex align-items-center gap-3">
            <li class="dropdown d-lg-none">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="ri-search-line font-22"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                    <form class="p-3">
                        <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    </form>
                </div>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    {{-- <img src="{{ asset('assets/dashboard/admin/images/flags/us.jpg')}}" alt="user-image" class="me-0 me-sm-1" height="12"> --}}
                    <span class="align-middle d-none d-lg-inline-block">{{ __("pageLawyer.Language") }}</span> <i class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">

                    <!-- item-->
                    <a href="{{ route('languageConverter','fr') }}" class="dropdown-item">
                        <img src="{{ asset('assets/dashboard/admin/images/flags/french.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">French</span>
                    </a>

                    <!-- item-->
                    <a href="{{ route('languageConverter','ar') }}" class="dropdown-item">
                        <img src="{{ asset('assets/dashboard/admin/images/flags/arabe.png')}}" alt="user-image" class="me-1" height="18"> <span class="align-middle">Arabe</span>
                    </a>

                    <!-- item-->
                    {{-- <a href="{{ route('languageConverter','ar') }}" class="dropdown-item">
                        <img src="{{ asset('assets/dashboard/admin/images/flags/spain.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="{{ route('languageConverter','ar') }}" class="dropdown-item">
                        <img src="{{ asset('assets/dashboard/admin/images/flags/russia.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                    </a> --}}

                </div>
            </li>

            <li class="d-none d-sm-inline-block">
                <div class="nav-link" id="light-dark-mode" data-bs-toggle="tooltip" data-bs-placement="left" title="Theme Mode">
                    <i class="ri-moon-line font-22"></i>
                </div>
            </li>


            <li class="d-none d-md-inline-block">
                <a class="nav-link" href="" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line font-22"></i>
                </a>
            </li>

            <li class="dropdown" >
                <a class="nav-link text-right dropdown-toggle arrow-none nav-user px-2" style="display: flex !important" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    </span>
                    <span class="d-lg-flex flex-column gap-1 d-none">
                        <h5 class="my-0">{{ Auth::user()->first_name . " " . Auth::user()->last_name }}</h5>
                        <h6 class="my-0 fw-normal">{{ __("pageLawyer.Lawyer") }}</h6>
                    </span>
                    <span class="account-user-avatar" >
                        <img src="{{asset( Auth::user()->profile_image) }}" alt="user-image" width="32" class="rounded-circle avatar-sm">
                </a>
                <div class="dropdown-menu text-right dropdown-menu-end dropdown-menu-animated profile-dropdown" @if (session()->get("locale") === "ar") dir="rtl"  @else dir="ltr" @endif>
                    <!-- item-->
                    <div class=" dropdown-header noti-title" >
                        <h6 class="text-overflow m-0">{{ __("pageLawyer.Welcome") }} !</h6>
                    </div>

                    <!-- item-->
                    <a href="{{ route('lawyers.show', Auth::user()->lawyerDetail->slug ) }}" class="dropdown-item">
                        <i class="mdi mdi-earth me-1"></i>
                        <span>{{ __("pageLawyer.myPage") }}</span>
                    </a>

                    <!-- item-->
                    <a href="{{ route("lawyer.settings") }}" class="dropdown-item">
                        <i class="mdi mdi-account-circle me-1"></i>
                        <span>{{ __("pageLawyer.myAccount") }}</span>
                    </a>

                    <!-- item-->
                    <a href="{{ route("lawyer.settings.show") }}" class="dropdown-item">
                        <i class="mdi mdi-account-edit me-1"></i>
                        <span>{{ __("pageLawyer.Settings") }}</span>
                    </a>

                    <!-- item-->
                    <a href="{{ route('status.logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                        class="dropdown-item">
                        <i class="mdi mdi-logout me-1"></i>
                        <span>{{ __("pageLawyer.Logout") }}</span>
                    </a>
                    <form id="logout-form" action="{{ route('status.logout') }}" method="GET" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>
