<!DOCTYPE html>
<html lang="fr">

    <x-main.lawyer.ltr.layouts.main.partials.head :data="['lawyer' => $lawyer, 'user' => $user, 'title' => $title]" />

    <body class="hidden-bar-wrapper {{ auth()->id() == $lawyer->lawyer_id ? 'editable' : '' }}">

        <div class="page-wrapper" data-target="">
            {{-- <x-main.lawyer.ltr.layouts.main.partials.preloader /> --}}

            <x-main.lawyer.ltr.layouts.main.partials.header :data="['lawyer' => $lawyer, 'user' => $user]" />

            {{ $slot }}

            <x-main.lawyer.ltr.layouts.main.partials.footer :data="['lawyer' => $lawyer, 'user' => $user]" />
            <!--Scroll to top-->
            <div class="back-to-home">
                <a class="back-to-website" href="{{ route('home') }}">
                    <span class="fa fa-arrow-left"></span>
                    {{ __('lawyer.home') }}
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

        <x-main.lawyer.ltr.layouts.main.partials.scripts :data="['lawyer' => $lawyer, 'user' => $user]" />

    </body>
</html>


