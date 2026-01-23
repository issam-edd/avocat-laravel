@props(['data'])

@php
    $blogs = $data['blogs'];
@endphp

<!-- ======================= Blog Start ============================ -->
<section dir="ltr" class="space min py-0 pt-5">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-left mb-5">
                    <h3 class="ft-bold text-muted tw-text-xl text-left">{{ __('siteweb.search_results') }}: <span class="theme-cl-s">{{ __('siteweb.blogs') }}</span></h3>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @foreach($blogs as $blog)
                <!-- Single Item -->
                    <x-main.default.ltr.pages.search.global.blog :data="['blog' => $blog]" />
            @endforeach
        </div>

        <!-- row -->
        @if ($blogs->hasPages())
            <x-main.default.ltr.global.pagination :data="[ 'links' => $blogs ]" />
        @endif

    </div>
</section>
<!-- ======================= Blog Start ============================ -->
