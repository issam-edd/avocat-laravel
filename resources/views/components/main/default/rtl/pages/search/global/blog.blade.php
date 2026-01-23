<!-- Single -->
<div dir="rtl" class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-right">
    <div class="jbr-wrap text-right border rounded">
        <div class="cats-box blog-search-card mlb-res rounded bg-white d-flex align-items-end justify-content-between px-3 py-3">
            <div class="cats-box rounded bg-white d-flex align-items-start">
                <div class="text-right blog-search-image">
                    @if(!!$blog->image_link)
                        <img src="{{ asset($blog->image_link) }}" width="120" height="100" style="object-fit: cover" alt="">
                    @else
                        <img class="img-fluid" src="{{ asset('assets/main/default/img/blog-1.png') }}" width="120" height="100" style="object-fit: cover" alt="{{ $blog->title_ar ?? $blog->title }}">
                    @endif
                </div>
                <div class="cats-box-caption px-2">
                    <h3 class="fs-md mb-1 ft-medium blog-title-overview">
                        <a href="{{ route('lawyers.blogs.show', [ 'blog' => $blog, 'slug' => $blog->user->lawyerDetail->slug ]) }}">
                            {{ strip_tags($blog->title_ar ?? $blog->title) }}
                        </a>
                    </h3>
                    <p class="blog-body-overview">
                        {{ strip_tags($blog->body_ar ?? $blog->body) }}
                    </p>
                        <div class="lawyer-card-cta mt-2">
                            <div class="text-left mlb-last">
                                <a href="{{ route('lawyers.blogs.show', [ 'blog' => $blog, 'slug' => $blog->user->lawyerDetail->slug ]) }}" class="btn gray ft-medium apply-btn fs-sm rounded rtl-link">أكمل القرائة<i class="lni lni-arrow-left ml-1"></i></a>
                            </div>
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>
