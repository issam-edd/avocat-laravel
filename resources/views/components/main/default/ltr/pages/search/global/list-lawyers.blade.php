@props(['data'])

@php
    $users = $data['users']->take(4);
    $all_users = $data['users'];
    $term = $data['term'];
@endphp
<section class="middle text-right py-0 pt-5">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-left mb-5">
                    <!-- <h6 class="text-muted mb-0">Recent Jobs</h6> -->
                    <h3 class="ft-bold text-muted tw-text-xl">{{ __('siteweb.search_results') }}: <span class="theme-cl-s">{{ __('siteweb.lawyers') }}</span></h3>
                </div>
            </div>
        </div>

        <!-- row -->
        <div class="row align-items-center">


        @foreach($users as $user)
            <!-- Single -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <x-main.default.ltr.pages.search.global.lawyer :data="['user' => $user]" />
            </div>
        @endforeach


        </div>
        <!-- row -->
        @if ($all_users->count() > 4)
            <div class="row justify-content-end">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <form method="GET" action="{{ route('search', 'avocats') }}" class="position-relative text-end">
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
<!-- ======================= Job List ======================== -->
