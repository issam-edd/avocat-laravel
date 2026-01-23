@props(['title'])
<!DOCTYPE html>
<html lang="en" data-layout="topnav">

    <head>
        <meta charset="utf-8" />
        <title>{{ __('siteweb.name') }} | {{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <meta name="csrf-token" content="{{ csrf_token() }}"/>

        <!-- App favicon -->
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

        <!-- Plugin css -->
        <link rel="stylesheet" href="{{ asset('assets/dashboard/admin/vendor/daterangepicker/daterangepicker.css') }}">
        <link href="{{ asset('assets/dashboard/admin/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

        <!-- Theme Config Js -->
        <script src="{{ asset('assets/dashboard/admin/js/hyper-config.js') }}"></script>

        <!-- App css -->
        <link href="{{ asset('assets/dashboard/admin/css/app-saas.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
        <link href="{{ asset('assets/dashboard/admin/css/my-style.css') }}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="{{ asset('assets/dashboard/admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" /> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.min.css"/>

        @if (request()->route()->getName() === 'lawyer.models.upload'
            || request()->route()->getName() === 'lawyer.models.fiels.uploaded.show'
        )
            <script src="{{ asset('assets/js/tailwind-jit.js') }}"></script>
            <script type="tailwind-config">
                {
                    prefix: "tw-",
                    corePlugins: {
                        preflight: false,
                    }
                }
            </script>
        @endif

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&display=swap');

            * {
                font-family: 'Cairo', sans-serif !important;
            }
            @media print {
                #hide {
                    display: none !important;
                }
            }
        </style>
        <style>
            [type='text'], [type='email'], [type='password'], [type='number'], select, textarea,  [type='text']:focus, [type='email']:focus, [type='url']:focus, [type='password']:focus, [type='number']:focus, [type='date']:focus, [type='datetime-local']:focus, [type='month']:focus, [type='search']:focus, [type='tel']:focus, [type='time']:focus, [type='week']:focus, [multiple]:focus, textarea:focus, select:focus {
                outline: 0px !important;
                outline-offset: 0px !important;
                box-shadow: none !important;
            }
        </style>
    </head>

    <body>


        <!-- Begin page -->
        <div class="wrapper">
            <!-- Pre-loader -->
            {{-- <div id="preloader">
                <div id="status">
                    <div class="bouncing-loader"><div ></div><div ></div><div ></div></div>
                </div>
            </div> --}}
            <!-- End Preloader-->
            <!-- ========== Topbar Start ========== -->
            @include("dashboard.lawyer.layout.top-navbar")
            {{-- top-navbar --}}
            <!-- ========== Topbar End ========== -->

            <!-- ========== Horizontal Menu Start ========== -->
            @include("dashboard.lawyer.layout.navbar")
            {{--  --}}
            <!-- ========== Horizontal Menu End ========== -->


            <div class="content-page">
                <div class="content">
                    <div class="container-fluid">
                        <div class="m-3">
                            <x-dashboard.lawyer.alert />
                        </div>
                    {{ $slot }}
                    </div>
                </div>
                <!-- content -->

                <!-- Footer Start -->
                @include("dashboard.lawyer.layout.footer")

                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->
        @include("dashboard.lawyer.layout.script")

    </body>
</html>
