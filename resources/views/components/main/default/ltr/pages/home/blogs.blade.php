<!-- ======================= Blog Start ============================ -->
<section dir="ltr" class="space min">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center mb-5">
                    <!-- <h6 class="text-muted mb-0">اخر المقالات</h6> -->
                    <h2 class="ft-bold tw-text-2xl"><span class="theme-cl-s">{{ __('siteweb.blogs') }}</span></h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">

        <div class="blogs-slide px-3 col-12" >


            @foreach($blogs as $blog)
                <!-- Single Item -->
                <div class="single_slide px-2">
                    <x-main.default.ltr.pages.home.blog :data="['blog' => $blog]" />
                </div>
            @endforeach

        </div>


        </div>

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="position-relative text-center">
                    <a href="{{ route('blogs') }}" class="show-all-btn btn btn-md theme-bg-s rounded text-light">
                        {{ __('siteweb.see_all') }}
                        <i class="lni lni-arrow-right ml-2"></i></a>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- ======================= Blog Start ============================ -->
