<!-- Main Footer -->
<footer class="main-footer text-right" dir="rtl">
		<div class="auto-container">
        	<!-- Widgets Section -->
            <div class="widgets-section">
				<!-- Scroll To Top -->
				<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
            	<div class="row clearfix">

                    <!-- Big Column -->
                    <div class="big-column col-lg-8 col-md-12 col-sm-12">
                        <div class="row clearfix">

							<!--Footer Column-->
                            <div class="footer-column col-lg-8 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="{{ route('home') }}"><img src="{{ asset('images/logos/logo-dark.svg') }}" width="250" alt="محاموا مراكش" /></a>
                                    </div>
                                    <div>

                                        <p style="color: #8fa4c2">
                                            @if (isset($options['description_ar']))
                                                    {{ $options['description_ar'] ?? '' }}
                                            @else
                                                محاموا مراكش - مصدرك للعثور على محامين محترفين في مراكش. نحن نوفر معلومات مفصلة عن أكثر المكاتب المحترفة في مراكش والموارد القانونية المفيدة لمساعدة عملائنا في فهم حقوقهم والتزاماتهم بشكل أفضل.
                                            @endif
                                        </p>
                                    </div>
									<div class="text"></div>
									<!-- Social Nav -->
									<!-- <ul class="social-nav">
										<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
									</ul> -->
								</div>
							</div>

							<!--Footer Column-->
                            <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h5>روابط مفيدة</h5>
									<ul class="footer-list">
										<li><a href="{{ route('lawyers.show', $lawyer->slug) }}">الرئيسية</a></li>
										<li><a href="{{ route('lawyers.blogs', $lawyer->slug) }}">المقالات</a></li>
										<li><a href="{{ route('lawyers.show', 'test') }}">معلومات عنا</a></li>
										<li><a href="{{ route('lawyers.contact', $lawyer->slug) }}">اتصل بنا</a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>

					<!-- Big Column -->
                    <div dir="ltr" class="big-column col-lg-4 col-md-12 col-sm-12">
                        <div class="row clearfix">

							<!-- Footer Column -->
							<div class="footer-column col-lg-12 col-md-6 col-sm-12">
								<div class="footer-widget contact-widget">
									<h5>معلومات المكتب</h5>
									<ul>

										@if(isset($options->phone_number_one) && !is_null($options->phone_number_one))
											<li>
												<a href="tel:{{ $options->phone_number_one ?? '' }}">{{ $options->phone_number_one ?? '' }}</a>
												<span class="icon flaticon-call-1"></span>
											</li>
										@endif

										@if(isset($options->phone_number_two) && !is_null($options->phone_number_two))
											<li>
												<a href="tel:{{ $options->phone_number_two ?? '' }}">{{ $options->phone_number_two ?? '' }}</a>
												<span class="icon flaticon-call-1"></span>
											</li>
										@endif

										@if(isset($options->email_address_one) && !is_null($options->email_address_one))
											<li>
												<a href="mailto:{{ $options->email_address_one ?? '' }}">{{ $options->email_address_one ?? '' }}</a>
												<span class="icon flaticon-email-2"></span>
											</li>
										@endif

										@if(isset($options->email_address_two) && !is_null($options->email_address_two))
											<li>
												<a href="mailto:{{ $options->email_address_two ?? '' }}">{{ $options->email_address_two ?? '' }}</a>
												<span class="icon flaticon-email-2"></span>
											</li>
										@endif

										@if(isset($options->address) && !is_null($options->address))
											<li>
												{{ $options->address ?? '' }}
												<span class="icon flaticon-maps-and-flags"></span>
											</li>
										@endif
									</ul>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="copyright">حقوق الطبع والنشر 2023. جميع الحقوق محفوظة.</div>
			</div>
		</div>
	</footer>
