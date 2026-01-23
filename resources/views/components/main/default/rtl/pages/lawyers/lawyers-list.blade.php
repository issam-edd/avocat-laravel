@props(['data'])

@php
    $lawyers = $data['lawyers'];
@endphp

<x-main.default.rtl.pages.search.search-box :data="['term' => '']" />

<section class="middle text-right">
    <div class="container">

        <x-main.default.rtl.pages.lawyers.page-title />

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
