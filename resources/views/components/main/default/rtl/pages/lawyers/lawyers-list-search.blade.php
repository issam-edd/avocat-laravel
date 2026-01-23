@props(['data'])

@php
    $lawyers = $data['lawyers'];
    $term = $data['term'];
@endphp

<x-main.default.rtl.pages.lawyers.search />

<section class="middle text-right">
    <div class="container">

        <x-main.default.rtl.pages.lawyers.page-title-search :term="$term" />

        <!-- row -->
        <div class="row align-items-center">

            <!-- Lawyers cards List -->
            @foreach($lawyers as $lawyer)

                <x-main.default.rtl.pages.lawyers.lawyer :data="[ 'lawyer' => $lawyer ]" />

            @endforeach

        </div>
        <!-- row -->

        <x-main.default.rtl.global.pagination :data="[ 'links' => $lawyers ]" />

    </div>
</section>
<!-- ======================= Job List ======================== -->
