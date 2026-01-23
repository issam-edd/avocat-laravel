<div class="topnav active {{ Config::get('app.locale', 'ar') === 'ar' ? 'text-right' : '' }}">
    <div class="container-fluid">


        {{-- <nav class="navbar navbar-expand-lg"  @if (session()->get("locale") === "ar") dir="rtl"  @else dir="ltr" @endif> --}}
        <nav class="navbar navbar-expand-lg "  @if (Config::get('app.locale', 'ar') === "ar") dir="rtl"  @else dir="ltr" @endif>
            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav {{ Config::get('app.locale', 'ar') === 'ar' ? 'links-right' : '' }}" style="flex-wrap: wrap;">
                    <li class="nav-item ">
                        <a class="nav-link arrow-none" href="{{ route('client.index') }}" id="topnav-dashboards" >
                            <i  @if (Config::get('app.locale', 'ar') === "ar") style="margin-left: 3px;" @endif class="uil-dashboard"></i>{{ __('navLawyer.Dashboard') }}
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i @if (Config::get('app.locale', 'ar') === "ar") style="margin-left: 3px;" @endif class="uil-comment-dots"></i>Chat <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">
                            <a href="{{ route('client.notification.index') }}" class="dropdown-item">Chat</a>
                            {{-- <a href="" class="dropdown-item">{{ __('navLawyer.AddBlog') }}</a> --}}
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-file" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i @if (Config::get('app.locale', 'ar') === "ar") style="margin-left: 3px;" @endif class="uil-file-bookmark-alt"></i>Files <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-file">
                            <a href="{{ route('files.index') }}" class="dropdown-item">List Files</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-info-file" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i @if (Config::get('app.locale', 'ar') === "ar") style="margin-left: 3px;" @endif class="uil-file-bookmark-alt"></i>Info Files <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-info-file">
                            <a href="{{ route('client.infos.index') }}" class="dropdown-item">List Info Files</a>
                            <a href="{{ route('client.infos.create') }}" class="dropdown-item">Add Info Files</a>
                        </div>
                    </li>
                    {{-- lawyer.settings.show.expertise --}}
                </ul>
            </div>
        </nav>
    </div>
</div>
