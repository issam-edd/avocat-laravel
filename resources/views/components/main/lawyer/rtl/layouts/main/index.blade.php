<!DOCTYPE html>
<html lang="ar">

    <x-main.lawyer.rtl.layouts.main.partials.head :data="['lawyer' => $lawyer, 'user' => $user, 'title' => $title]" />

    <body class="hidden-bar-wrapper {{ auth()->id() == $lawyer->lawyer_id ? 'editable' : '' }}">

        <div class="page-wrapper" data-target="">
            {{-- <x-main.lawyer.rtl.layouts.main.partials.preloader /> --}}

            <x-main.lawyer.rtl.layouts.main.partials.header :data="['lawyer' => $lawyer, 'user' => $user]" />

            {{ $slot }}

            <x-main.lawyer.rtl.layouts.main.partials.footer :data="['lawyer' => $lawyer, 'user' => $user]" />
            <!--Scroll to top-->
            <div class="back-to-home">
                <a class="back-to-website" href="{{ route('home') }}">
                    <span class="fa fa-arrow-left"></span> الرئيسية
                </a>
            </div>

            <div class="scroll-to-top scroll-to-target" data-target="html">
                <span class="fa fa-angle-up"></span>
            </div>

            @if (!!$lawyer->whatsapp_link)
                <div class="whatsapp-button">
                    <a href="{{ $lawyer->whatsapp_link }}" target="_blank">
                        <img src="{{ asset('images/icons/whatsapp.svg') }}" class="tw-w-full" alt="">
                    </a>
                </div>
            @endif

        </div>

        <x-main.lawyer.rtl.layouts.main.partials.scripts :data="['lawyer' => $lawyer, 'user' => $user]" />

    </body>
</html>


