<div class="topnav active {{ Config::get('app.locale', 'ar') === 'ar' ? 'text-right' : '' }}">
    <div class="container-fluid">


        {{-- <nav class="navbar navbar-expand-lg"  @if (session()->get("locale") === "ar") dir="rtl"  @else dir="ltr" @endif> --}}
        <nav class="navbar navbar-expand-lg "  @if (Config::get('app.locale', 'ar') === "ar") dir="rtl"  @else dir="ltr" @endif>
            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav {{ Config::get('app.locale', 'ar') === 'ar' ? 'links-right' : '' }}" style="flex-wrap: wrap;">
                    <li class="nav-item ">
                        <a class="nav-link arrow-none" href="{{ route("lawyer.index") }}" id="topnav-dashboards" >
                            <i  @if (Config::get('app.locale', 'ar') === "ar") style="margin-left: 3px;" @endif class="uil-dashboard"></i>{{ __('navLawyer.Dashboard') }}
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link arrow-none" href="{{ route("notification.index") }}" id="top-nav-client" >
                            <i  @if (Config::get('app.locale', 'ar') === "ar") style="margin-left: 3px;" @endif class="uil-comments"></i> Messenger
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link arrow-none" href="{{ route("lawyer.calendar.home") }}" id="top-nav-client" >
                            <i  @if (Config::get('app.locale', 'ar') === "ar") style="margin-left: 3px;" @endif class="uil-calendar-alt"></i> {{ __('client.Calendar') }}
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i @if (Config::get('app.locale', 'ar') === "ar") style="margin-left: 3px;" @endif class="uil-apps"></i>{{ __('navLawyer.Blogs') }} <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">
                            <a href="{{ route("lawyer.blogs") }}" class="dropdown-item">{{ __('navLawyer.ListBlogs') }}</a>
                            <a href="{{ route("lawyer.blogs.create") }}" class="dropdown-item">{{ __('navLawyer.AddBlog') }}</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-faq" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i @if (Config::get('app.locale', 'ar') === "ar") style="margin-left: 3px;" @endif class="uil-comments-alt"></i>{{ __('navLawyer.FAQ') }} <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-faq">
                            <a href="{{ route("lawyer.faqs") }}" class="dropdown-item">{{ __('navLawyer.ListFAQ') }}</a>
                            <a href="{{ route('lawyer.faqs.create') }}" class="dropdown-item">{{ __('navLawyer.AddFAQ') }}</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="top-nav-layouts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i @if (Config::get('app.locale', 'ar') === "ar") style="margin-left: 3px;" @endif class="uil-envelope-alt"></i>{{ __('navLawyer.Mails') }} <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="top-nav-layouts">
                            <a class="dropdown-item" href="{{ route("lawyer.mails") }}">{{ __('navLawyer.ListMails') }}</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="top-nav-layouts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i @if (Config::get('app.locale', 'ar') === "ar") style="margin-left: 3px;" @endif class=" uil-folder-lock"></i>{{ __('navLawyer.Models') }} <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="top-nav-layouts">
                            <a class="dropdown-item" href="{{ route("lawyer.models.files.all") }}">{{ __('navLawyer.ListModels') }}</a>
                            <a class="dropdown-item" href="{{ route("lawyer.models") }}">{{ __('navLawyer.AddModel') }}</a>
                            <a class="dropdown-item" href="{{ route("lawyer.models.upload") }}">{{ __('model.createModelPriver') }}</a>
                            <a class="dropdown-item" href="{{ route("lawyer.models.uploaded") }}">{{ __('model.createModelPriverInModels') }}</a>
                            <a class="dropdown-item" href="{{ route("lawyer.models.files.all.uploaded") }}">{{ __('model.ListModelPriver') }} </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="top-nav-client" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i @if (Config::get('app.locale', 'ar') === "ar") style="margin-left: 3px;" @endif class=" uil-users-alt"></i>{{ __('client.Clients') }} <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="top-nav-client">
                            <a class="dropdown-item" href="{{ route("lawyer.clients.index") }}">{{ __('client.ListClients') }}</a>
                            <a class="dropdown-item" href="{{ route("lawyer.clients.create") }}">{{ __('client.AddClient') }}</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="top-nav-client" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i @if (Config::get('app.locale', 'ar') === "ar") style="margin-left: 3px;" @endif class=" uil-books"></i>{{ __('client.Files') }} <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="top-nav-client">

                            <a class="dropdown-item" href="{{ route("lawyer.files.index") }}">{{ __('client.ListFiles') }}</a>
                            <a class="dropdown-item" href="{{ route("lawyer.files.create") }}">{{ __('client.AddFile') }}</a>

                            <a class="dropdown-item" href="{{ route("lawyer.expenses.index") }}">{{ __('client.Expenses') }}</a>

                            <a class="dropdown-item" href="{{ route("lawyer.procedures.index") }}">{{ __('client.Procedures') }}</a>
                            <a class="dropdown-item" href="{{ route("lawyer.infos.index") }}">{{ __('client.FileInfos') }}</a>
                        </div>
                    </li>

                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="top-nav-client" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i @if (Config::get('app.locale', 'ar') === "ar") style="margin-left: 3px;" @endif class=" uil-users-alt"></i>Messanger <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="top-nav-client">
                            <a class="dropdown-item" href="{{ route("notification.index") }}">Messanger</a>
                        </div>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="top-settings-layouts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i @if (Config::get('app.locale', 'ar') === "ar") style="margin-left: 3px;" @endif class="uil-cog"></i>{{ __('navLawyer.Settings') }}<div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="top-settings-layouts">
                            <a class="dropdown-item" href="{{ route("lawyer.settings.show") }}">{{ __('navLawyer.Profile') }}</a>
                            <a class="dropdown-item" href="{{ route("lawyer.settings.landing.page.section.one.show") }}">{{ __('lawyerLanding.FirstSection') }}</a>
                            <a class="dropdown-item" href="{{ route("lawyer.settings.landing.page.section.show",2) }}">{{ __('lawyerLanding.SecondSection') }}</a>
                            <a class="dropdown-item" href="{{ route("lawyer.settings.landing.page.section.show",3) }}">{{ __('lawyerLanding.ThirdSection') }}</a>
                            <a class="dropdown-item" href="{{ route("lawyer.settings.landing.page.section.show",4) }}">{{ __('lawyerLanding.FourthSection') }}</a>
                            <a class="dropdown-item" href="{{ route("lawyer.settings.landing.page.section.show",5) }}">{{ __('lawyerLanding.FifthSection') }}</a>

                            {{-- <a class="dropdown-item" href="{{ route("lawyer.settings.landing.page.show") }}">{{ __('navLawyer.PageDestination') }}</a> --}}
                            <a class="dropdown-item" href="{{ route("lawyer.settings.footer.page") }}">{{ __('navLawyer.PageFooter') }}</a>
                            @if(true)
                                <a class="dropdown-item" href="{{ route("lawyer.settings.show.expertise") }}">{{ __('navLawyer.Competencies') }}</a>
                            @endif
                            </div>
                    </li>
                    {{-- lawyer.settings.show.expertise --}}
                </ul>
            </div>
        </nav>
    </div>
</div>
