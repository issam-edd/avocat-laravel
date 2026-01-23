@props(['data'])

@php

    $faqs = $data['faqs'];

    if ($faqs->count() >= 8) {
        $faqs_list_one = $faqs->take(4);
        $faqs_list_two = $faqs->skip(4)->take(4);
    } else {
        // if total is 7 for example
        $part_one = ceil(($faqs->count() / 2)); // this will be 4
        $part_two = floor(($faqs->count() / 2)); // and this will be 3
        // for better spliting :)

        $faqs_list_one = $faqs->take($part_one);
        $faqs_list_two = $faqs->skip($part_one)->take($part_two);
    }
@endphp

<!-- ======================= FAQ's Detail ======================== -->
<section dir="rtl" class="middle text-right py-0 pt-2" dir="ltr">
    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center mb-4">
                    <h3 class="ft-bold text-right text-muted">نتائج البحث في : <span class="theme-cl-s">الأسئلة </span></h3>
                </div>
            </div>
        </div>

        <div class="row align-items-start justify-content-center" >
            <div class="row px-md-2 px-0 col-12 col-lg-6">
                @foreach($faqs_list_one as $faq)
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <x-main.default.rtl.pages.search.global.faq :data="['faq' => $faq]" />
                    </div>
                @endforeach
            </div>
            <div class="row px-md-2 px-0 col-12 col-lg-6">
                @foreach($faqs_list_two as $faq)
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <x-main.default.rtl.pages.search.global.faq :data="['faq' => $faq]" />
                    </div>
                @endforeach
            </div>
        </div>

            <!-- row -->
            @if ($faqs->hasPages())
                <x-main.default.rtl.global.pagination :data="[ 'links' => $faqs ]" />
            @endif

        </div>

</section>
<!-- ======================= FAQ's End ======================== -->
