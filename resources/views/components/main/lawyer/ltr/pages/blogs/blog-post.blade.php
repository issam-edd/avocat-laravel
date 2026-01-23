@props(['data'])

@php

    $blog = $data['blog'];
    $lawyer = $data['lawyer'];
    $link = route('lawyers.blogs.show', [ 'slug' => $lawyer->slug, 'blog' => $blog->id ]);

@endphp

<div class="col-lg-4 col-md-6 col-sm-12 case-block">
    <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
        <div class="inner-box">
            <figure class="image-box">
                @if(!!$blog->image_link)
                    <img src="{{ filter_var($blog->image_link, FILTER_VALIDATE_URL) ? $blog->image_link : asset($blog->image_link) }}" alt="{{ $blog->title }}">
                @else
                    <img src="{{ asset('assets/main/default/img/blog-1.png') }}" alt="">
                @endif
                <div class="link"><a href="{{ route('lawyers.blogs.show', [ 'slug' => $lawyer->slug, 'blog' => $blog->id ]) }}"><i class="flaticon-link"></i></a></div>
                <div class="overlay-layer"></div>
            </figure>
            <div class="lower-content">
                <div class="box">
                    <h4 class="blog-title-overview"><a href="{{ route('lawyers.blogs.show', [ 'slug' => $lawyer->slug, 'blog' => $blog->id ]) }}">{{ $blog->title }}</a></h4>
                </div>
                <div class="text">
                    <p class="blog-body-overview">
                        {{ strip_tags($blog->body) }}
                    </p>
                </div>
                <div class="link">
                    <a href="{{ route('lawyers.blogs.show', [ 'slug' => $lawyer->slug, 'blog' => $blog->id ]) }}">
                        اكمل القرائة
                        <i class="fa fa-long-arrow-left"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
