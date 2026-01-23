<!-- ======================= Home Banner ======================== -->
<div class="home-banner margin-bottom-0 intro-bgd intro-banner" style="background-image: url('assets/main/default/img/bg-4.jpg'); background-position: center; background-size: cover;">
    <div class="banner-gradient"></div>
    <div class="container">

        <div class="row align-items-center justify-content-between">


            <div class="col-xl-5 col-lg-7 col-md-7 col-sm-12 col-12">
                <form class="bg-white rounded p-4" action="{{ route('search') }}" method="GET">
                    <div class="row">
                        <div dir="ltr" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-left">
                            <div class="form-group">
                                <h2 class="mb-0 ft-bold tw-text-xl">{{ __('siteweb.search_in_website') }}</h2>
                                <p class="fs-md mt-2 text-muted">{{ __('siteweb.find_the_best_lawyer') }}</p>
                            </div>

                            <div class="form-group position-relative">
                                <input name="term" type="text" class="form-control lg form-ico border" placeholder="{{ __('siteweb.search_placeholder') }}" required />
                                <i class="bnc-ico lni lni-search-alt"></i>
                            </div>
                            <div class="form-group position-relative">
                                <button class="btn full-width custom-height-lg theme-bg-s text-white fs-md" type="submit">{{__('siteweb.search')}}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-xl-6 col-lg-5 col-md-5 col-sm-12 col-12">
                <div class="bnr_thumb position-relative">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ======================= Home Banner ======================== -->
