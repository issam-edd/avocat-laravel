<!-- ======================= Customer Review ======================== -->
<section dir="ltr" class="middle gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center mb-5">
                    <!-- <h6 class="text-muted mb-0">Our Reviews</h6> -->
                    <h2 class="ft-bold text-muted tw-text-2xl">أسئلة و<span class="theme-cl-s"> أجوبة</span></h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="review-slide px-3">

                    <!-- single review -->
                    @foreach($faqs as $faq)
                        <div class="single_review px-2">
                            <div dir="rtl" class="reviews_wrap position-relative bg-white rounded py-4">
                                <div class="rw-header d-flex align-items-center justify-content-start  px-4">
                                    <div class="rv-110-thumb position-relative verified-author card-profile-image">
                                        <a href="{{ route('lawyers.show', $faq->user->lawyerDetail->slug) }}">
                                            @if($faq->user->lawyerDetail->is_premium && !!$faq->user->profile_image)
                                                <img class="card-profile-image circle" width="70" src="{{ asset($faq->user->profile_image) }}" alt="{{ $faq->user->lawyerDetail->full_name_ar }}">

                                            @else
                                                <img class="card-profile-image circle" width="70" src="{{ asset('images\dashboard\users\profile_default.jpg') }}" alt="{{ $faq->user->lawyerDetail->full_name_ar }}">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="rv-110-caption pr-3">
                                        <a href="{{ route('lawyers.show', $faq->user->lawyerDetail->slug) }}">
                                            <h4 class="ft-medium fs-md mb-0 lh-1">{{ !!$faq->user->lawyerDetail->full_name_ar ? $faq->user->lawyerDetail->full_name_ar : $faq->user->lawyerDetail->first_name_ar . ' ' . $faq->user->lawyerDetail->last_name_ar }}</h4>
                                            <p class="p-0 m-0 text-muted">محامي</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="rw-header d-flex mt-3 flex-col">
                                    <h6 class="theme-cl-s !tw-text-md tw-h-[60px] lawyer-question tw-flex tw-items-center  px-4 tw-border-r-2 tw-border-solid tw-border-t-transparent tw-border-l-transparent tw-border-b-transparent tw-border-r-[#003582]">{{ $faq->question_ar }}</h6>
                                    <p class="faq-preview  px-4">
                                        {{ $faq->answer_ar }}
                                            <div class="px-4">
                                                <a href="{{ route('lawyers.show', $faq->user->lawyerDetail->slug) }}" class="fs-sm theme-cl-s float-left rtl-link">اقرأ المزيد<i class="lni lni-arrow-left ml-1"></i></a>
                                            </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================= Customer Review ======================== -->
