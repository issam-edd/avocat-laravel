@props(['data'])

@php

    $faqs = $data['faqs']->take(4);
    $all_faqs = $data['faqs'];
    $term = $data['term'];
@endphp

<!-- ======================= FAQ's Detail ======================== -->
<section class="middle text-right py-0 pt-5" dir="ltr">
    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center mb-4">
                    <h3 class="ft-bold text-right text-muted">نتائج البحث في : <span class="theme-cl-s">الأسئلة </span></h3>
                </div>
            </div>
        </div>

        <div class="row align-items-start justify-content-end" >
            @foreach($faqs as $faq)
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <x-main.default.rtl.pages.search.global.faq :data="['faq' => $faq]" />
                </div>
            @endforeach
            </div>

            @if ($all_faqs->count() > 4)
                <div class="row justify-content-end my-5">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <form method="GET" action="{{ route('search', 'faqs') }}" class="position-relative text-left">
                            <input type="hidden" name="term" value="{{ $term }}">
                            <button type="submit" class="show-all-btn btn btn-md theme-bg-s rounded text-light rtl-link">
                                <i class="lni lni-arrow-left ml-2"></i>
                                عرض الكل
                            </button>
                        </div>
                    </div>
                </div>
            @endif

        </div>

</section>
<!-- ======================= FAQ's End ======================== -->
