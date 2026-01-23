@props(['data'])

@php

    $faq = $data['faq'];


@endphp

<div dir="rtl" class="d-block position-relative border rounded py-0 px-0 mb-4 text-right">
    <div id="accordion" class="accordion">
            <div class="">
                <div class="card-header" id="h{{$faq->id}}">
                    <h5 class="mb-0 pl-2">
                    <button class="btn btn-link text-right" data-toggle="collapse" data-target="#ord1{{ $faq->id }}" aria-expanded="false" aria-controls="ord1">
                        {{ $faq->question_ar }}
                    </button>
                    </h5>
                </div>

                <div id="ord1{{ $faq->id }}" class="collapse" aria-labelledby="h{{$faq->id}}" data-parent="#accordion">
                    <div class="card-body">
                        {{ $faq->answer_ar }}
                    </div>
                </div>
            </div>

    </div>
</div>
