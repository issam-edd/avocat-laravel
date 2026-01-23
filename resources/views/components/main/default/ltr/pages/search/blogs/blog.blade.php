<!-- Single -->
<div dir="ltr" class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-left">
    <div class="jbr-wrap text-left border rounded">
        <div class="cats-box blog-search-card mlb-res rounded bg-white d-flex align-items-end justify-content-between px-3 py-3">
            <div class="cats-box rounded bg-white d-flex align-items-start">
                <div class="text-left blog-search-image">
                    @if(!!$blog->image_link)
                        <img class=" tw-min-w-[120px] tw-h-[100px]" src="{{ asset($blog->image_link) }}" width="120" height="100" style="object-fit: cover" alt="">
                    @else
                        <img class="img-fluid tw-min-w-[120px] tw-h-[100px]" src="{{ asset('assets/main/default/img/blog-1.png') }}" width="120" height="100" style="object-fit: cover" alt="{{ $blog->title ?? $blog->title_ar }}">
                    @endif
                </div>
                <div class="cats-box-caption px-2">
                    <h3 class="fs-md mb-1 ft-medium blog-title-overview">
                        <a href="{{ route('lawyers.blogs.show', [ 'blog' => $blog, 'slug' => $blog->user->lawyerDetail->slug ]) }}">
                            {{ strip_tags($blog->title ?? $blog->title_ar) }}
                        </a>
                    </h3>
                    <p class="blog-body-overview">
                        {{ strip_tags($blog->body ?? $blog->body_ar) }}
                    </p>
                    <div class="lawyer-card-cta mt-2">
                        <div class="text-right mlb-last">
                            <a href="{{ route('lawyers.blogs.show', [ 'blog' => $blog, 'slug' => $blog->user->lawyerDetail->slug ]) }}" class="btn gray ft-medium apply-btn fs-sm rounded">
                                {{ __('siteweb.details') }}
                                <i class="lni lni-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
