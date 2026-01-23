<section class="middle text-right">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center mb-5">
                    <!-- <h6 class="text-muted mb-0">Recent Jobs</h6> -->
                    <h2 class="ft-bold text-muted tw-text-2xl">المحامون <span class="theme-cl-s">الحاليون</span></h2>
                </div>
            </div>
        </div>

        <!-- row -->
        <div class="row align-items-center">


        @foreach($lawyers as $lawyer)
            <!-- Single -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <x-main.default.rtl.pages.home.lawyer-card :data="['lawyer' => $lawyer]" />
            </div>
        @endforeach


        </div>
        <!-- row -->

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="position-relative text-center">
                    <a href="{{ route('lawyers') }}" class="show-all-btn btn btn-md theme-bg-s rounded text-light rtl-link">عرض الكل<i class="lni lni-arrow-left ml-2"></i></a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ======================= Job List ======================== -->
