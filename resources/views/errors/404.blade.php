
@if (app()->getLocale() == 'ar')
    <x-main.default.rtl.layouts.main.master title="{{__('siteweb.page_not_found')}}">

            <x-main.default.rtl.pages.search.search-box :data="[ 'term' => '' ]" />

            <section class="middle">
                    <div class="container">

                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">

                                <!-- Icon -->
                                <div class="p-4 d-inline-flex align-items-center justify-content-center circle bg-light-warning text-warning mx-auto mb-4"><i class="ti-face-sad fs-lg"></i></div>
                                <!-- Heading -->
                                <h2 class="mb-2 ft-bold">{{ __('siteweb.page_not_found')}}</h2>
                                <!-- Text -->
                                <p class="ft-regular fs-md mb-5">{{ __('siteweb.page_not_found_description') }}</p>
                                <!-- Button -->
                                <a class="btn btn-dark" href="{{ route('home') }}">{{ __('siteweb.home') }}</a>
                            </div>
                        </div>

                    </div>
                </section>


    </x-main.default.rtl.layouts.main.master>
@else

    <x-main.default.ltr.layouts.main.master title="{{__('siteweb.page_not_found')}}">

        <x-main.default.ltr.pages.search.search-box :data="[ 'term' => '' ]" />
        <section class="middle">
                <div class="container">

                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">

                            <!-- Icon -->
                            <div class="p-4 d-inline-flex align-items-center justify-content-center circle bg-light-warning text-warning mx-auto mb-4"><i class="ti-face-sad fs-lg"></i></div>
                            <!-- Heading -->
                            <h2 class="mb-2 ft-bold tw-text-2xl">{{ __('siteweb.page_not_found')}}</h2>
                            <!-- Text -->
                            <p class="ft-regular fs-md mb-5">{{ __('siteweb.page_not_found_description') }}</p>
                            <!-- Button -->
                            <a class="btn btn-dark" href="{{ route('home') }}">{{ __('siteweb.home') }}</a>
                        </div>
                    </div>

                </div>
            </section>


    </x-main.default.ltr.layouts.main.master>

@endif

