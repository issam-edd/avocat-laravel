
<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="{{ route("home") }}" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{ asset('images/logos/logo-dark.svg') }}" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('images/logos/logo-light.svg') }}" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="{{ route("home") }}" class="logo logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('images/logos/logo-dark.svg') }}" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('images/logos/logo-light.svg') }}" alt="small logo">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>

    <!-- Full Sidebar Menu Close Button -->
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user">
            <a href="{{ route("home") }}">
                <img src="{{ asset("assets/dashboard/admin/images/users/avatar-1.jpg") }}" alt="user-image" height="42" class="rounded-circle shadow-sm">
                <span class="leftbar-user-name mt-2">Avocat Marrakech</span>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title">Navigation</li>

            <li class="side-nav-item">
                <a  href="{{ route("admin.index") }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    {{-- <span class="badge bg-success float-end">5</span> --}}
                    <span> Dashboards </span>
                </a>
            </li>

            <li class="side-nav-title">Managements</li>


            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="uil-users-alt"></i>
                    <span> Avocats </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route("admin.avocats") }}">Liste des avocats</a>
                        </li>
                        <li>
                            <a href="{{ route("admin.avocats.premium") }}">Liste des avocats premium</a>
                        </li>
                        <li>
                            <a href="{{ route("admin.avocats.create") }}">Ajouter un avocat</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarBlogs" aria-expanded="false" aria-controls="sidebarBlogs" class="side-nav-link">
                    <i class=" uil-comment-alt-notes"></i>
                    <span> Blogs </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarBlogs">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route("admin.blogs") }}">Liste des blogs</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> FAQ </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProjects">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route("admin.faqs") }}">Liste des FAQ</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                    <i class="uil-envelope-alt"></i>
                    <span> Mails </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route("admin.mails") }}">Liste des emails</a>
                        </li>
                    </ul>
                </div>
            </li>


            <!-- <li class="side-nav-title">Parametres</li> -->

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarSettings" aria-expanded="false" aria-controls="sidebarSettings" class="side-nav-link">
                    <i class=" uil-cog"></i>
                    <span> Parametres </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarSettings">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route("admin.settings") }}">Général</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
