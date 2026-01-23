@props(['data'])

@php
    $blogs = $data['blogs'];
@endphp

<!-- ======================= Blog Start ============================ -->
<section dir="rtl" class="space min py-0 pt-5">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center mb-5">
                    <!-- <h6 class="text-muted mb-0">اخر المقالات</h6> -->
                    <h3 class="ft-bold text-muted text-right">نتائج البحث في : <span class="theme-cl-s">المقالات</span></h3>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @foreach($blogs as $blog)
                <!-- Single Item -->
                <x-main.default.rtl.pages.search.blogs.blog :data="['blog' => $blog]" />
            @endforeach
        </div>

        <!-- row -->
        @if ($blogs->hasPages())
            <x-main.default.rtl.global.pagination :data="[ 'links' => $blogs ]" />
        @endif

    </div>
</section>
<!-- ======================= Blog Start ============================ -->
