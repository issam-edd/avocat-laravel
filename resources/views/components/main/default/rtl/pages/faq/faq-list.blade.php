@props(['data'])

@php
    $lawyers = $data['lawyers'];


    if ($lawyers->count() >= 8) {
        $phase1 = $lawyers->take(4);
        $phase2 = $lawyers->skip(4)->take(4);
    } else {
        // if total is 7 for example
        $part_one = ceil(($lawyers->count() / 2)); // this will be 4
        $part_two = floor(($lawyers->count() / 2)); // and this will be 3
        // for better spliting :)

        $phase1 = $lawyers->take($part_one);
        $phase2 = $lawyers->skip($part_one)->take($part_two);
    }
@endphp

<x-main.default.rtl.pages.search.search-box :data="['term' => '']" />

<!-- ======================= FAQ's Detail ======================== -->
<section class="middle text-right" dir="rtl">
    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center mb-4">
                    <h2 class="ft-bold text-muted tw-text-2xl">أسئلة و<span class="theme-cl-s"> أجوبة</span></h2>
                </div>
            </div>
        </div>

        <div class="row align-items-start justify-content-center" >
            <div class="col-lg-6 w-100 row align-items-start justify-content-start">
                @foreach($phase1 as $lawyer1)
                    <div class="col-xl-12 px-0 px-md-2 col-lg-12 col-md-12 col-sm-12">
                        <x-main.default.rtl.pages.faq.faq-item :data="['lawyer' => $lawyer1]" />
                    </div>
                @endforeach
            </div>
            <div class="col-lg-6 w-100 row align-items-start justify-content-start">
                @foreach($phase2 as $lawyer2)
                    <div class="col-xl-12 px-0 px-md-2 col-lg-12 col-md-12 col-sm-12">
                        <x-main.default.rtl.pages.faq.faq-item :data="['lawyer' => $lawyer2]" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <x-main.default.rtl.global.pagination :data="[ 'links' => $data['lawyers'] ]" />
</section>
<!-- ======================= FAQ's End ======================== -->
