@php
    $slides = $lawyer->slides->where('is_published', 1);
    // ->where('is_published', 1);
@endphp
<!-- Banner Section -->
<section class="banner-section text-left">
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
		<div class="main-slider-carousel ltr owl-carousel owl-theme">
            @if ($slides->count() == 0)

                <div class="slide" style="
                background-image: url('{{ asset('assets/main/lawyer/images/background/2.jpg') }}');
                background-size: cover;">
                    <div class="auto-container">
                        <!-- Content Column -->
                        <div class="content-column">
                            <div class="inner-column">
                                <div class="title" style="letter-spacing: 0px;">
                                     {{ __('lawyer.lawyer') }}
                                    </div>
                                <h1>{{ $lawyer->full_name_fr }}</h1>
                                    <div class="text ml-auto mt-5">
                                        Le MAITRE {{ $lawyer->full_name_fr }} est spécialisé en Droit des Affaires, Droit Bancaire, Droit des Assurances, Droit Commercial, Droit des Contrats, et en général assiste ses clients dans la rédaction de contrats, joint ventures, droit immobilier, droit pénal, droit de la famille , ainsi qu'en droit du travail et en défense pénale, et intervient dans le domaine du droit de la concurrence et du contentieux commercial.
                                    </div>
                                <div class="btns-box">
                                    <a href="{{ route('lawyers.contact', $lawyer->slug) }}" class="theme-btn btn-style-one">
                                        <span class="txt">
                                                {{ __('lawyer.contact') }}
                                            <i class="fa fa-long-arrow-right"></i>
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
                    background-position: left;
                    background-repeat: no-repeat;
                    ">
                    <div class="container">

                        <img class="slide-png" src="{{ asset($slide->image) }}">
                    </div>
                        <div class="auto-container">
                            <!-- Content Column -->
                            <div class="content-column">
                                <div class="inner-column">
                                    <div class="title" style="letter-spacing: 0px;"> {{ $slide->sub_title }}</div>
                                    <h1>{{ $slide->title }}</h1>
                                    <div class="text ml-auto mt-5">
                                    {{ $slide->description }}
                                    </div>
                                    <div class="btns-box">
                                        <a href="{{ $slide->button_link }}" class="theme-btn btn-style-one">
                                            <span class="txt">
                                                {{ $slide->button_text }}
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
