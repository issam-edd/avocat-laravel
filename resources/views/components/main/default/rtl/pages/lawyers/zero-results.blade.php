@props(['data'])

@php
    $term = $data['term'];
@endphp

<x-main.default.rtl.pages.lawyers.search />

<section class="middle text-right">
    <div class="container">

        <x-main.default.rtl.pages.lawyers.page-title-search :term="$term" />

        <!-- row -->
        <div class="row align-items-center">

            <h4>آسف لكن بحثك - <span class="theme-cl-s">{{ $term }}</span> - لم يطابق أي من المحامين</h4>

        </div>
        <!-- row -->

    </div>
</section>
<!-- ======================= Job List ======================== -->
