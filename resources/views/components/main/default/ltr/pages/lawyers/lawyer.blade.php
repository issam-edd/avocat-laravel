
<div class="col-md-6 col-sm-12 col-12">
<div class="jbr-wrap text-left border rounded text-left ">
    <div class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-between px-3 py-3">
        <div class="cats-box rounded bg-white d-flex align-items-start" style="flex: 1">
            <div class="text-center lawyer-list-profile">
                @if(!$lawyer->is_premium || !$lawyer->user->profile_image)
                    <img src="{{ asset('images\dashboard\users\profile_default.jpg') }}" alt="{{ $lawyer->full_name_fr }}">
                @else
                    <img src="{{ asset($lawyer->user->profile_image) }}" alt="{{ $lawyer->full_name_fr }}">
                @endif
            </div>
            <div class="cats-box-caption px-2 ml-2 lawyer-card-content w-100">
                <h4 class="fs-md mb-0 ft-medium name-with-badge">
                    {{ $lawyer->full_name_fr }}

                    @if($lawyer->is_premium)
                        <img src="{{ asset('images/verified.svg') }}" width="16" alt="verified">
                    @endif
                </h4>
                <div class="d-block mb-2 position-relative">
                    @if (!!$lawyer->address)
                        <p class="m-0 {{ !$lawyer->is_premium ? 'lawyer-address mt-2' : '' }}"><span class="text-muted medium">
                            <i class="lni lni-map-marker mr-1"></i>
                            {{ $lawyer->address }}
                            </span>
                        </p>
                    @endif
                    @if (!!$lawyer->phone_number)
                        <p dir="ltr" class="m-0">
                            <span class="text-muted medium">
                                <i class="lni lni-phone mr-1"></i>
                                {{ $lawyer->phone_number }}
                            </span>
                        </p>
                    @endif

                    @if ($lawyer->is_premium)
                        <p class="mt-1">
                            <span class="text-muted medium lawyer-bio-overview">
                                {{ $lawyer->bio_fr }}
                            </span>
                        </p>
                    @endif

                    @if($lawyer->is_premium || true)
                        <div class="lawyer-card-cta mt-2" style="visibility: {{ $lawyer->is_premium ? 'visible' : 'hidden' }}">
                            <div class="text-right mlb-last">
                                <a href="{{ route('lawyers.show', $lawyer->slug) }}" class="btn gray ft-medium apply-btn fs-sm rounded">
                                    {{ __('siteweb.details') }}
                                    <i class="lni lni-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>

    </div>
</div>

</div>
