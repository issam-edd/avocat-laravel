<!-- Welcome Section -->
<section dir="ltr" class="welcome-section text-left" style="background-image: url({{ asset('assets/main/lawyer/images/background/pattern-1.png') }})">



    <div class="auto-container">
			<div class="inner-container">
                <div class="edit-zone">
                    <a href="{{ route("lawyer.settings.landing.page.section.show",3) }}">
                        Edit
                    </a>
                </div>
				<div class="clearfix">

					<!-- Image Column -->
					<div class="image-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image titlt" data-tilt data-tilt-max="2">
								@if(!!$lawyer->lawyerLandingPage->about_me_image)

									<img src="{{ asset($lawyer->lawyerLandingPage->about_me_image) }}" alt="{{ $lawyer->full_name_ar }}" />
								@else

                                    @if (!!$lawyer->user->profile_image)

									<img src="{{ asset($lawyer->user->profile_image) }}" alt="{{ $lawyer->full_name_ar }}" />
                                    @else
                                    <img src="{{ asset('images\dashboard\users\profile_default.jpg') }}" alt="{{ $lawyer->full_name_ar }}" />

                                    @endif

								@endif
							</div>
						</div>
					</div>

					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title -->
							<div class="sec-title">
                                <div class="welcome-title" style="letter-spacing: 0px;">Maitre</div>
								<h2><span class="theme-cl">{{ $lawyer->full_name_fr ?? $lawyer->user->first_name . ' ' . $lawyer->user->last_name }}</span></h2>
								<div class="text">
									@if(!!$lawyer->lawyerLandingPage->about_me_text)
										{{ $lawyer->lawyerLandingPage->about_me_text }}
									@else
                                        Grâce à ma vaste expérience dans le domaine du droit, nous fournissons des services juridiques distinctifs et complets.Je détiens un diplôme en droit d'une université reconnue.Nous avons une bonne réputation dans le domaine du droit et nous sommes intéressés à trouver des solutions efficaces à nos clients Nous tenons à fournir un service distingué et à répondre aux besoins de nos clients de la meilleure façon possible. Nous visons à obtenir les meilleurs résultats pour nos clients à chaque fois.
                                    @endif
                                </div>
							</div>
							<!-- <ul class="list-style-one">
								<li>خدمات قانون الشركات والأعمال، بما في ذلك تأسيس الشركات</li>
								<li>خدمات قانون العقارات، بما في ذلك المساعدة في عمليات الشراء والبيع والإيجار والتقنين.</li>
								<li>خدمات قانون التأمينات، بما في ذلك المساعدة في تقديم المطالبات والحصول على التعويضات</li>
								<li>خدمات قانون الأسرة، بما في ذلك المساعدة في قضايا الطلاق وحضانة الأطفال وحقوق الأسرة.</li>
							</ul> -->
							<div class="btns-box">
								<a href="{{ route('lawyers.contact', $lawyer->slug) }}" class="theme-btn btn-style-two">
                                    <span class="txt">
                                        {{ __('lawyer.contact') }}
                                        <i class="fa fa-long-arrow-right"></i>
                                    </span>
                                </a>
								<!-- <a href="contact.html" class="theme-btn btn-style-three"><span class="txt">Read more <i class="arrow flaticon-right"></i></span></a> -->
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Welcome Section -->
