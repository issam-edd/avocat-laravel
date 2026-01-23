
@props(['title'])

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>{{ $title }} | Avocats Marrakech</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />

        <!-- Daterangepicker css -->
        <link rel="stylesheet" href="{{ asset("assets/dashboard/admin/vendor/daterangepicker/daterangepicker.css") }}">
        <link href="{{ asset('assets/dashboard/admin/css/my-style.css') }}" rel="stylesheet" type="text/css" id="app-style" />
        <!-- Vector Map css -->
        <link rel="stylesheet" href="{{ asset("assets/dashboard/admin/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css") }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <style>
            @media print {
                #hide {
                    display: none !important;
                }
            }
        </style>
        <!-- Theme Config Js -->
        <script src="{{ asset("assets/dashboard/admin/js/hyper-config.js") }}"></script>

        <!-- App css -->
        <link href="{{ asset("assets/dashboard/admin/css/app-saas.min.css") }}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="{{ asset("assets/dashboard/admin/css/icons.min.css") }}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- Pre-loader -->
            <div id="preloader">
                <div id="status">
                    <div class="bouncing-loader"><div ></div><div ></div><div ></div></div>
                </div>
            </div>
            <!-- End Preloader-->

            <!-- ========== Topbar Start ========== -->
                @include("dashboard.admin.layout.header")
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== -->
            @include("dashboard.admin.layout.slidebar")

            <!-- ========== Left Sidebar End ========== -->


            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="m-3">
                        <x-dashboard.admin.alert />
                    </div>
                    {{ $slot }}
                    <!-- container -->

                </div>
                <!-- content -->

                <!-- Footer Start -->
                @include("dashboard.admin.layout.footer")
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Theme Settings -->


        {{-- Scripts --}}
        @include("dashboard.admin.layout.script")

    </body>
</html>
