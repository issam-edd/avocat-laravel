


<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
    <div class="blg_grid_box">
        <div class="blg_grid_thumb">
            <a href="{{ route('lawyers.blogs.show', ['blog' => $blog->id, 'slug' => $author->lawyerDetail->slug ]) }}">
                @if(!!$blog->image_link)
                    <img src="{{ filter_var($blog->image_link, FILTER_VALIDATE_URL) ? $blog->image_link : asset($blog->image_link) }}" alt="{{ $blog->title ?? $blog->title_ar }}">
                @else
                    <img src="{{ asset('assets/main/default/img/blog-1.png') }}" alt="">
                @endif
            </a>
        </div>
        <div class="blg_grid_caption">
            <div class="blg_title"><h4 class="blog-title-overview"><a href="{{ route('lawyers.blogs.show', ['blog' => $blog->id, 'slug' => $author->lawyerDetail->slug ]) }}">{{ $blog->title ?? $blog->title_ar }}</a></h4></div>
            <div class="blg_desc">
                <p class="blog-body-overview">
                    {{ strip_tags($blog->body ?? $blog->body_ar) }}
                </p>

                <div class="my-3 text-right" style="height: 10px;">
                    <a href="{{ route('lawyers.blogs.show', [ 'slug' => $author->lawyerDetail->slug, 'blog' => $blog->id ]) }}" class="fs-sm theme-cl-s float-rihgt ">
                        {{ __('siteweb.see_more') }}
                        <i class="lni lni-arrow-right ml-1"></i>
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
                                <div class="text-truncate">{{ $author->lawyerDetail->full_name_fr }}</div>
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
