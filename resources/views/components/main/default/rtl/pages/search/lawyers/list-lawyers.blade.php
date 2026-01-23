@props(['data'])

@php
    $users = $data['users'];
@endphp
<section class="middle text-right py-0 pt-5">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center mb-5">
                    <!-- <h6 class="text-muted mb-0">Recent Jobs</h6> -->
                    <h3 class="ft-bold text-right text-muted">نتائج البحث في : <span class="theme-cl-s">المحاميين</span></h3>
                </div>
            </div>
        </div>

        <!-- row -->
        <div class="row align-items-center">


        @foreach($users as $user)
            <!-- Single -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <x-main.default.rtl.pages.search.lawyers.lawyer :data="['user' => $user]" />
            </div>
        @endforeach


        </div>
        <!-- row -->
        @if ($users->hasPages())
            <x-main.default.rtl.global.pagination :data="[ 'links' => $users ]" />
        @endif

    </div>
</section>
<!-- ======================= Job List ======================== -->
