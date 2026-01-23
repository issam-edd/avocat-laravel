@props(['title'])
<!DOCTYPE html>
<html lang="{{ $lang }}">

    <!-- Website header -->
    <x-main.default.rtl.layouts.main.partials.head :title="$title" />

    <body dir="{{ $isRtl ? 'rtl' : 'ltr' }}" >

        <div id="main-wrapper">

            <!-- Website preloader -->
            {{-- <x-main.default.rtl.layouts.main.partials.preloader /> --}}

            <!-- Website header -->
            <x-main.default.rtl.layouts.main.partials.header />

                <!-- Content goes here -->
                {{ $slot }}

            <!-- Newsletter -->
            <x-main.default.rtl.layouts.main.partials.newsletter />

            <!-- Website Footer -->
            <x-main.default.rtl.layouts.main.partials.footer />

            <!-- Back to top button -->
            <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>

            <!-- Popup -->
            <x-main.default.rtl.layouts.main.partials.popup />

        </div>

        <!-- Website scripts and plugins -->
        <x-main.default.rtl.layouts.main.partials.scripts />

    </body>
</html>
