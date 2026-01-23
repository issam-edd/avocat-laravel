@props(['data'])

<!-- ======================= Searchbar Banner ======================== -->
<div class="py-3 theme-bg-s searchingBar">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-7 col-lg-9 col-md-9 col-sm-12 col-12">
                <form class="bg-white rounded border" action="{{ route('search') }}" method="GET">
                    <div class="row no-gutters">
                        <div class="col-xl-10 col-lg-9 col-md-8 col-sm-8 col-8">
                            <div class="form-group mb-0 position-relative">
                                <i class="bnc-ico lni lni-search-alt"></i>
                                <input type="text" value="{{ $data['term'] ?? '' }}" name="term" class="form-control sm right-ico !tw-ring-transparent " placeholder="اسم المحامي، نوع التخصص..." required />
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4">
                            <div class="form-group mb-0 position-relative">
                                <button class="search-btn btn full-width custom-height sm bg-dark text-white fs-md" type="submit">
                                    <i class="lni lni-search-alt tw-text-white tw-text-lg"></i>
                                    {{-- {{ __('siteweb.search') }} --}}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- ======================= Searchbar Banner ======================== -->
