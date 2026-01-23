@php
    $slides = $lawyer->slides->where('is_published', 1);
    // ->where('is_published', 1);
@endphp
<!-- Banner Section -->
<section class="banner-section text-right">
        <div class="edit-zone">
            <a href="{{ route("lawyer.settings.landing.page.section.one.show") }}">
                Edit
            </a>
        </div>
		<!-- Social Nav -->
		<!-- <ul class="social-nav" style="left: 20px !important; right: inherit !important">
			<li class="facebook"><a href="#"><span class="fa fa-facebook-f"></span></a></li>
			<li class="twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
			<li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
		</ul> -->
		<div class="main-slider-carousel rtl owl-carousel owl-theme">
            @if ($slides->count() == 0)

                <div class="slide" style="
                background-image: url('{{ asset('assets/main/lawyer/images/background/2.jpg') }}');
                background-size: cover;">
                    <div class="auto-container">
                        <!-- Content Column -->
                        <div class="content-column">
                            <div class="inner-column">
                                <div class="title" style="letter-spacing: 0px; padding-left: 0; padding-right: 70px"> المحامي</div>
                                <h1>{{ $lawyer->full_name_ar }}</h1>
                                    <div class="text ml-auto mt-5">
                                    الأستاذ {{ $lawyer->full_name_ar }} متخصص في قانون الأعمال ، القانون المصرفي ، قانون التأمين ، القانون التجاري ، قانون العقود ، وبشكل عام يساعد عملائه في صياغة العقود ، والمشاريع المشتركة بين الشركات ، وقانون العقارات ، والقانون الجنائي ، والأسرة القانونية ، وكذلك في قانون العمل والدفاع الجنائي ، ويتدخل في مجال قانون المنافسة والتقاضي التجاري.
                                    </div>
                                <div class="btns-box">
                                    <a href="{{ route('lawyers.contact', $lawyer->slug) }}" class="theme-btn btn-style-one">
                                        <span class="txt">
                                            <i class="fa fa-long-arrow-left"></i>
                                            استشارة مجانية
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            @else
                @foreach ($slides as $slide)


                <div class="slide" style="
                    background-image: url('{{ asset( $slide->background ) }}');
                    background-size: cover;
                    background-position: right;
                    background-repeat: no-repeat;
                    ">
                    <div class="container">

                        <img class="slide-png" src="{{ asset($slide->image) }}">
                    </div>

                        <div class="auto-container">
                            <!-- Content Column -->
                            <div class="content-column">
                                <div class="inner-column">
                                    <div class="title" style="letter-spacing: 0px;"> {{ $slide->sub_title_ar }}</div>
                                    <h1>{{ $slide->title_ar }}</h1>
                                    <div class="text ml-auto mt-5">
                                    {{ $slide->description_ar }}
                                    </div>
                                    <div class="btns-box">
                                        <a href="{{ $slide->button_link }}" class="theme-btn btn-style-one">
                                            <span class="txt">
                                                {{ $slide->button_text_ar }}
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            @endif

		</div>

	</section>
	<!-- End Banner Section -->
