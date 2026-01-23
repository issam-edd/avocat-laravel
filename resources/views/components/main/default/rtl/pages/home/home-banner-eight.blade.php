<!-- ======================= Home Banner ======================== -->
<div class="home-banner margin-bottom-0 intro-bgd intro-banner" style="background-image: url('assets/main/default/img/bg-4.jpg'); background-position: center; background-size: cover;">
    <div class="banner-gradient"></div>
    <div class="container">

        <div class="row align-items-center justify-content-between">


            <div class="col-xl-5 col-lg-7 col-md-7 col-sm-12 col-12">
                <form class="bg-white rounded p-4" action="{{ route('search') }}" method="GET">
                    <div class="row">
                        <div dir="rtl" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right">
                            <div class="form-group">
                                <h2 class="mb-0 ft-bold tw-text-xl">ابحث عن محامي ، سؤال ، مدونة ...</h2>
                                <p class="fs-md mt-2 text-muted">ابحث عن المحامي المناسب لقضيتك</p>
                            </div>

                            <div class="form-group position-relative">
                                <input name="term" type="text" class="form-control lg form-ico border" placeholder="اسم المحامي، نوع التخصص..." required />
                                <i class="bnc-ico lni lni-search-alt"></i>
                            </div>
                            <div class="form-group position-relative">
                                <button class="btn full-width custom-height-lg theme-bg-s text-white fs-md" type="submit">بحث</button>
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
