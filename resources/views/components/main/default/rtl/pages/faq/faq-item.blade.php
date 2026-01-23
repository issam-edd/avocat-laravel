@props(['data'])

@php

    $lawyer = $data['lawyer'];

    $faqs = $lawyer->faqs->take(3);

@endphp

<div dir="rtl" class="d-block position-relative border rounded py-3 px-3 mb-4 text-right">
    <div class="crs_tutor_thumb blog-profile-image blog-profil-footer mb-2">
            <a href="{{ route('lawyers.show', $lawyer->slug)}}" class="d-flex align-items-center">

                    @if ($lawyer->is_premium && !!$lawyer->user->profile_image)
                        <img src="{{ asset($lawyer->user->profile_image) }}" class="img-fluid circle" width="35" alt="{{ $lawyer->full_name_ar }}">
                    @else
                        <img src="{{ asset('images\dashboard\users\profile_default.jpg') }}" class="img-fluid circle" width="35" alt="{{ $lawyer->full_name_ar }}">
                    @endif

                    <div>{{ $lawyer->full_name_ar }}</div>

                    @if ($lawyer->is_premium)
                        <img src="{{ asset('images/verified.svg') }}" style="width: 16px !important; object-fit: contain" width="12" alt="verified" class="">
                    @endif
            </a>
    </div>
    <div id="accordion" class="accordion">
        @foreach($faqs as $key => $faq)
        <div class="card">
            <div class="card-header" id="h{{$key.$lawyer->id}}">
                <h5 class="mb-0">
                <button class="btn btn-link text-right" data-toggle="collapse" data-target="#ord1{{ $key.$lawyer->id }}" aria-expanded="false" aria-controls="ord1">
                    {{ $faq->question_ar }}
                </button>
                </h5>
            </div>

            <div id="ord1{{ $key.$lawyer->id }}" class="collapse" aria-labelledby="h{{$key.$lawyer->id}}" data-parent="#accordion">
                <div class="card-body">
                    {{ $faq->answer_ar }}
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <div class="my-3 mt-4" style="height: 10px;">
        <a href="{{ route('lawyers.faqs', $lawyer->slug) }}" class="fs-sm theme-cl-s float-left rtl-link">
            اقرأ المزيد
            <i class="lni lni-arrow-left mr-1"></i>
        </a>
    </div>
</div>
