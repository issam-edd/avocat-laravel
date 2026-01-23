


<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
    <div class="blg_grid_box">
        <div class="blg_grid_thumb">
            <a href="{{ route('lawyers.blogs.show', ['blog' => $blog->id, 'slug' => $author->lawyerDetail->slug ]) }}">
                @if(!!$blog->image_link)
                    <img src="{{ filter_var($blog->image_link, FILTER_VALIDATE_URL) ? $blog->image_link : asset($blog->image_link) }}" alt="{{ $blog->title_ar ?? $blog->title }}">
                @else
                    <img src="{{ asset('assets/main/default/img/blog-1.png') }}" alt="">
                @endif
            </a>
        </div>
        <div class="blg_grid_caption">
            <div class="blg_title"><h4 class="blog-title-overview"><a href="{{ route('lawyers.blogs.show', ['blog' => $blog->id, 'slug' => $author->lawyerDetail->slug ]) }}">{{ $blog->title_ar ?? $blog->title }}</a></h4></div>
            <div class="blg_desc">
                <p class="blog-body-overview">
                    {{ strip_tags($blog->body_ar ?? $blog->body) }}
                </p>

                <div class="my-3" style="height: 10px;">
                    <a href="{{ route('lawyers.blogs.show', ['blog' => $blog->id, 'slug' => $author->lawyerDetail->slug ]) }}" class="fs-sm theme-cl-s float-left rtl-link">
                        اقرأ المزيد
                        <i class="lni lni-arrow-left ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="crs_grid_foot">
            <div class="crs_flex d-flex align-items-center justify-content-between br-top px-3 py-2">
                <div class="crs_fl_first">
                    <div class="crs_tutor">
                        <div class="crs_tutor_thumb blog-profile-image blog-profil-footer">
                            <a href="{{ route('lawyers.show', $author->lawyerDetail->slug) }}" class="d-flex align-items-center">
                                @if (!$author->profile_image || !$author->lawyerDetail->is_premium)
                                    <img src="{{asset('images\dashboard\users\profile_default.jpg')}}" class="img-fluid circle" width="35" alt="">

                                @else
                                    <img src="{{asset($author->profile_image)}}" class="img-fluid circle" width="35" alt="">
                                @endif
                                <div class="text-truncate">{{ $author->lawyerDetail->full_name_ar }}</div>
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
</div>
