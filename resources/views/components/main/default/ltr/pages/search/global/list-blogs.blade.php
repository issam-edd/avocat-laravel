@props(['data'])

@php
    $blogs = $data['blogs']->take(4);
    $all_blogs = $data['blogs'];
    $term = $data['term'];
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

        @if ($all_blogs->count() > 4)

            <div class="row justify-content-end">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 tw-flex tw-justify-end">
                    <form method="GET" action="{{ route('search', 'blogs') }}" class="position-relative text-end">
                        <input type="hidden" name="term" value="{{ $term }}">
                        <button type="submit" class="show-all-btn btn btn-md theme-bg-s rounded text-light">
                            {{ __('siteweb.see_all') }}
                            <i class="lni lni-arrow-right ml-2"></i>
                        </button>
                    </form>
                </div>
            </div>
        @endif

    </div>
</section>
<!-- ======================= Blog Start ============================ -->
