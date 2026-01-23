@props(['data'])

@php

    $faq = $data['faq'];
    $lawyer = $data['lawyer'];

@endphp

<div class="col-lg-6 col-md-12 col-sm-12 case-block">
    <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
        <div class="inner-box">
            <div class="lower-content">
                <div class="box">
                    <h4 class="blog-title-overview"><a >{{ $faq->question_ar }}</a></h4>
                </div>
                <div class="text">
                    <p class="">
                        {{ strip_tags($faq->answer_ar) }}
                    </p>
                </div>
                @if(false)
                <div class="link">
                    <a href="{{ route('lawyers.blogs.show', [ 'slug' => $lawyer->slug, 'blog' => $blog->id ]) }}">
                        اكمل القرائة
                        <i class="fa fa-long-arrow-left"></i>
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>