<!-- ======================= Customer Review ======================== -->
<section dir="ltr" class="middle gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center mb-5">
                    <!-- <h6 class="text-muted mb-0">Our Reviews</h6> -->
                    <h2 class="ft-bold text-muted tw-text-2xl">Questions et <span class="theme-cl-s">Réponses</span></h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="review-slide px-3">

                    <!-- single review -->
                    @foreach($faqs as $faq)
                        <div class="single_review px-2">
                            <div dir="ltr" class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                                <div class="rw-header d-flex align-items-center justify-content-start">
                                    <div class="rv-110-thumb position-relative verified-author card-profile-image">
                                        <a href="{{ route('lawyers.show', $faq->user->lawyerDetail->slug) }}">
                                            @if($faq->user->lawyerDetail->is_premium && !!$faq->user->profile_image)
                                                <img class="card-profile-image circle" width="70" src="{{ asset($faq->user->profile_image) }}" alt="{{ $faq->user->lawyerDetail->full_name_fr }}">
                                            @else
                                                <img class="card-profile-image circle" width="70" src="{{ asset('images\dashboard\users\profile_default.jpg') }}" alt="{{ $faq->user->lawyerDetail->full_name_fr }}">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="rv-110-caption pl-3">
                                        <a href="{{ route('lawyers.show', $faq->user->lawyerDetail->slug) }}">
                                            <h4 class="ft-medium fs-md mb-0 lh-1">{{ !!$faq->user->lawyerDetail->full_name_fr ? $faq->user->lawyerDetail->full_name_fr : $faq->user->first_name . ' ' . $faq->user->last_name }}</h4>
                                            <p class="p-0 m-0 text-muted">{{ __('siteweb.lawyer') }}</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="rw-header d-flex mt-3 flex-col">
                                    <h6 class="theme-cl-s">{{ $faq->question_fr }}</h6>
                                    <p class="faq-preview">
                                        {{ $faq->answer_fr }}
                                    </p>
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('lawyers.show', $faq->user->lawyerDetail->slug) }}" class="fs-sm theme-cl-s float-rihgt ">
                                            {{ __('siteweb.see_more') }}
                                            <i class="lni lni-arrow-right ml-1"></i>
                                        </a>
                                    </div>
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
