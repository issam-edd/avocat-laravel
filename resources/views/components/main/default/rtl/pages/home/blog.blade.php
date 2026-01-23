
<div dir="rtl" class="blg_grid_box reviews_wrap position-relative">
    <div class="blg_grid_thumb blog-image-preview">
        <a href="{{ route('lawyers.blogs.show', [ 'slug' => $lawyer->slug, 'blog' => $blog->id ]) }}">
            @if(!!$blog->image_link)
                <img class="img-fluid" src="{{ filter_var($blog->image_link, FILTER_VALIDATE_URL) ? $blog->image_link : asset($blog->image_link) }}" alt="{{ $blog->title_ar ?? $blog->title }}">
            @else
                <img class="img-fluid" src="{{ asset('assets/main/default/img/blog-1.png') }}" alt="{{ $blog->title_ar ?? $blog->title }}">
            @endif
        </a>

    </div>
    <div class="blg_grid_caption">
        <div class="blg_title">
            <h4 class="blog-title-overview">
            <a href="{{ route('lawyers.blogs.show', [ 'slug' => $lawyer->slug, 'blog' => $blog->id ]) }}">{{ $blog->title_ar ?? $blog->title }}</a>
        </h4>
        </div>
        <div class="blg_desc">
            <p class="blog-body-overview">
                {{ strip_tags($blog->body_ar ?? $blog->body) }}
            </p>

            <div class="my-3" style="height: 10px;">
                <a href="{{ route('lawyers.blogs.show', [ 'slug' => $lawyer->slug, 'blog' => $blog->id ]) }}" class="fs-sm theme-cl-s float-left rtl-link">اقرأ المزيد<i class="lni lni-arrow-left ml-1"></i></a>
            </div>
        </div>
    </div>
    <div class="crs_grid_foot">
        <div class="crs_flex d-flex align-items-center justify-content-between br-top px-3 py-2">
            <div class="crs_fl_first">
                <div class="crs_tutor">
                    <div class="crs_tutor_thumb blog-profile-image blog-profil-footer">
                        <a href="{{ route('lawyers.show', $lawyer->slug) }}" class="d-flex align-items-center">
                            @if(!$lawyer->user->profile_image || !$lawyer->is_premium)
                                <img src="{{ asset('images\dashboard\users\profile_default.jpg') }}" class="img-fluid circle" width="35" alt="{{ $lawyer->full_name_ar }}">

                            @else

                                <img src="{{ asset($lawyer->user->profile_image) }}" class="img-fluid circle" width="35" alt="{{ $lawyer->full_name_ar }}">
                            @endif
                            <div>{{ $lawyer->full_name_ar }}</div>
                        </a>
                </div>
                </div>
            </div>
            <div class="crs_fl_last">
                <div class="foot_list_info">
                    <ul>
                    <li>{{ $created_at }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
