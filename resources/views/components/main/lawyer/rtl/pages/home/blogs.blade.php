<!-- case-style-three -->
@if($blogs->count() > 0)
    <section class="case-style-three bg-color-1 text-right" dir="rtl">
        <div class="auto-container">

            <div class="sec-title centered">
				<h2>المقالات</h2>
			</div>

            <div class="row clearfix">


                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                        <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    @if(!!$blog->image_link)
                                        <img src="{{ filter_var($blog->image_link, FILTER_VALIDATE_URL) ? $blog->image_link : asset($blog->image_link) }}" alt="{{ $blog->title_ar ?? $blog->title }}">
                                    @else
                                        <img src="{{ asset('assets/main/default/img/blog-1.png') }}" alt="">
                                    @endif
                                    <div class="link"><a href="{{ route('lawyers.blogs.show', [ 'slug' => $lawyer->slug, 'blog' => $blog->id ]) }}"><i class="flaticon-link"></i></a></div>
                                    <div class="overlay-layer"></div>
                                </figure>
                                <div class="lower-content">
                                    <div class="box">
                                        <h4><a href="{{ route('lawyers.blogs.show', [ 'slug' => $lawyer->slug, 'blog' => $blog->id ]) }}">{{ $blog->title_ar ?? $blog->title }}</a></h4>
                                    </div>
                                    <div class="text">
                                        <p class="blog-body-overview">
                                            {{ strip_tags($blog->body_ar ?? $blog->body) }}
                                        </p>
                                    </div>
                                    <div class="link">
                                        <a href="{{ route('lawyers.blogs.show', [ 'slug' => $lawyer->slug, 'blog' => $blog->id ]) }}"><i class="fa fa-long-arrow-left"></i>اكمل القرائة</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>

            <div class="btns-box d-flex justify-content-center mt-5">
                <a href="{{ route('lawyers.blogs', $lawyer->slug) }}" class="theme-btn btn-style-two">
                    <span class="txt">
                    المزيد
                    </span>
                </a>
                <!-- <a href="contact.html" class="theme-btn btn-style-three"><span class="txt">Read more <i class="arrow flaticon-right"></i></span></a> -->
            </div>
        </div>
    </section>
    <!-- case-style-three end -->
@endif
