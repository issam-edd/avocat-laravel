@props(['data'])
@php

    $faq = $data['faq'];
    $lawyer = $data['lawyer'];

@endphp

<style>
    .case-block-two {
        /* border: 1px solid black; */
        background: white
    }

    .faq-preview {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        line-height: 20px;
    }

    .question-preview {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        font-size: 18px;
        -webkit-box-orient: vertical;
        border-left: 2px solid #003582;
        padding: 0 15px;
        color: #003582;
        margin-bottom: 10px;
    }

    .case-inner {
        padding: 25px 0;
    }

    .case-block-two .link {
        font-size: 14px;
    }
</style>

<div class="col-lg-4 col-md-12 col-sm-12 case-block h-100">
    <div class="case-block-two wow fadeInUp h-100" data-wow-delay="00ms" data-wow-duration="1500ms">
        <div class="case-inner">
            <div class="lower-content">
                <div class="box">
                    <h4 class="question-preview"><a >{{ $faq->question_fr }}</a></h4>
                </div>
                <div class="text px-3">
                    <p class="faq-preview">
                        {{ strip_tags($faq->answer_fr) }}
                    </p>
                </div>
                @if(true)
                <div class="link px-3">
                    <a href="{{ route('lawyers.faqs.show', [ 'id' => $faq->id, 'slug' => $lawyer->slug ]) }}">
                        Voir plus
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
