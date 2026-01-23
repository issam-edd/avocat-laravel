<!-- ======================= Newsletter Start ============================ -->
<section class="space bg-cover mt-3" style="background:var(--theme-cl-s) url({{asset('assets/main/default/img/landing-bg.png')}}) no-repeat;">
    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center mb-5">
                    <h6 class="text-light mb-0 tw-text-xl">اشترك الأن</h6>
                    <h2 class="ft-bold text-light tw-text-3xl">توصل بآخر الاخبار الخاصة بنا</h2>
                </div>
            </div>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12 col-12">
                <form method="POST" action="{{ route('email.store') }}" class="bg-white rounded p-1">
                    @csrf
                    <div class="row no-gutters">
                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                            <div class="form-group mb-0 position-relative">
                                <input name="email" type="email" class="form-control lg right-ico" placeholder="ادخل الايميل الخاص بك">
                                <i class="bnc-ico lni lni-envelope"></i>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                            <div class="form-group mb-0 position-relative">
                                <button class="btn full-width custom-height-lg bg-dark text-white fs-md" type="submit">اشترك</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>
<!-- ======================= Newsletter Start ============================ -->
