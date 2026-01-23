<!-- Single -->
<div class="col-md-12 col-sm-12 col-12">
    <div class="jbr-wrap text-left border rounded text-right">
            <div class="cats-box mlb-res rounded bg-white  px-3 py-3">
                <div class="cats-box rounded bg-white d-flex align-items-start">
                    <div class="text-center lawyer-list-profile">
                        @if($lawyer->is_premium && !!$user->profile_image)
                            <img src="{{ asset($user->profile_image) }}" alt="{{ $lawyer->full_name_ar }}">
                        @else
                            <img src="{{ asset('images\dashboard\users\profile_default.jpg') }}" alt="{{ $lawyer->full_name_ar }}">
                        @endif
                    </div>
                    <div class="cats-box-caption w-100 px-2  lawyer-card-content">
                        <h4 class="fs-md mb-0 ft-medium name-with-badge">

                            {{ $lawyer->full_name_ar }}

                            @if($lawyer->is_premium)
                            <img src="{{ asset('images/verified.svg') }}" width="16" alt="verified">
                            @endif
                        </h4>
                        <div class="d-block mb-2 position-relative">
                            @if (!!$lawyer->address)
                                <p class="m-0 {{ !$lawyer->is_premium ? 'lawyer-address' : '' }}">
                                    <span class="text-muted medium">
                                    <i class="lni lni-map-marker mr-1"></i>
                                    {{ $lawyer->address }}
                                    </span>
                                </p>
                            @endif
                            @if (!!$lawyer->phone_number)

                                <p dir="ltr" class="m-0">
                                    <span class="text-muted medium">
                                        {{ $lawyer->phone_number }}
                                        <i class="lni lni-phone ml-1"></i>
                                    </span>
                                </p>
                            @endif

                            @if($lawyer->is_premium)
                                <p class="mt-1">
                                    <span class="text-muted medium lawyer-bio-overview">
                                        {{ $lawyer->bio_ar }}
                                    </span>
                                </p>
                            @endif

                            @if($lawyer->is_premium || true)
                                <div class="lawyer-card-cta mt-2" style="visibility: {{ $lawyer->is_premium ? 'visible' : 'hidden' }}">
                                    <div class="text-left mlb-last"><a href="{{ route('lawyers.show', $lawyer->slug) }}" class="btn gray ft-medium apply-btn fs-sm rounded rtl-link">تفاصيل اكثر<i class="lni lni-arrow-left ml-1"></i></a></div>
                                </div>
                            @endif
                            <!-- <span class="muted medium ml-2 text-purple"><i class="lni lni-briefcase mr-1"></i>Contract</span> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
