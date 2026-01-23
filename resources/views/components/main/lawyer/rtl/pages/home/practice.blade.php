@php
    $practices = $lawyer->lawyerExpertise->first();
@endphp

@if (!$practices)
<!-- Practice Section -->
<section class="practice-section" style="background-image: url('{{asset('assets/main/lawyer/images/background/pattern-2.png')}}')">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>مجالات ممارستنا القانونية</h2>
			</div>
			<div class="inner-container">
				<div class="clearfix">

					<!-- Practice Block -->
						<div class="practice-block col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
								<div class="icon flaticon-car-1"></div>
								<h5><a href="">حوادث السيارات</a></h5>
								<div class="text">نحن نوفر خدمات قانونية للضحايا في حوادث السيارات</div>
							</div>
						</div>

					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-briefcase"></div>
							<h5><a href="">قانون العمل</a></h5>
							<div class="text">نحن نقدم خدمات قانونية شاملة للشركات والأعمال التجارية</div>
						</div>
					</div>

					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-handcuffs-1"></div>
							<h5><a href="">التقاضي المدني</a></h5>
							<div class="text">نحن نمثل عملائنا في الدعاوى المدنية ونسعى لتحقيق حقوقهم</div>
						</div>
					</div>

					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-save-money"></div>
							<h5><a href="">الدفاع عن التأمين</a></h5>
							<div class="text">نحن نقدم خدمات الدفاع القانوني للشركات التأمينية وفقًا للقانون</div>
						</div>
					</div>

					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-injury"></div>
							<h5><a href="">قانون التوظيف</a></h5>
							<div class="text">نحن نساعد العمال وأصحاب العمل على فهم حقوقهم وواجباتهم ونحن نقدم النصيحة القانونية اللازمة</div>
						</div>
					</div>

					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-law"></div>
							<h5><a href="">التقاضي التجاري</a></h5>
							<div class="text">نحن نقدم خدمات التمثيل القانوني في الدعاوى التجارية ونحن نعمل على تحقيق مصالح عملائنا</div>
						</div>
					</div>

					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-balance"></div>
							<h5><a href="">قانون العمال</a></h5>
							<div class="text">نحن نقدم النصيحة القانونية للعمال والنقابات حول حقوق العمال وسلامة المكان الذي يعملون فيه</div>
						</div>
					</div>

					<!-- Practice Block -->
					<div class="practice-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="icon flaticon-notebook"></div>
							<h5><a href="">قانون العائلة</a></h5>
							<div class="text">نحن نقدم النصيحة القانونية والدعم للأفراد والعائلات في جميع القضايا المتعلقة بالقانون الأسري</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Practice Section -->

@else

<section class="practice-section" style="background-image: url('{{asset('assets/main/lawyer/images/background/pattern-2.png')}}')">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>مجالات ممارستنا القانونية</h2>
        </div>
        <div class="inner-container">
            <div class="clearfix">

                @if ($practices['car_accident'] ?? true)

                <!-- Practice Block -->
                <div class="practice-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon flaticon-car-1"></div>
                        <h5><a href="">حوادث السيارات</a></h5>
                        <div class="text">نحن نوفر خدمات قانونية للضحايا في حوادث السيارات</div>
                    </div>
                </div>
                @endif

                @if ($practices['business_law'] ?? true)
                <!-- Practice Block -->
                <div class="practice-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon flaticon-briefcase"></div>
                        <h5><a href="">قانون العمل</a></h5>
                        <div class="text">نحن نقدم خدمات قانونية شاملة للشركات والأعمال التجارية</div>
                    </div>
                </div>
                @endif

                @if ($practices['civil_litigation'] ?? true)
                <!-- Practice Block -->
                <div class="practice-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon flaticon-handcuffs-1"></div>
                        <h5><a href="">التقاضي المدني</a></h5>
                        <div class="text">نحن نمثل عملائنا في الدعاوى المدنية ونسعى لتحقيق حقوقهم</div>
                    </div>
                </div>
                @endif

                @if ($practices['insurance_defence'] ?? true)
                <!-- Practice Block -->
                <div class="practice-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon flaticon-save-money"></div>
                        <h5><a href="">الدفاع عن التأمين</a></h5>
                        <div class="text">نحن نقدم خدمات الدفاع القانوني للشركات التأمينية وفقًا للقانون</div>
                    </div>
                </div>
                @endif

                @if ($practices['employment_law'] ?? true)
                <!-- Practice Block -->
                <div class="practice-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon flaticon-injury"></div>
                        <h5><a href="">قانون التوظيف</a></h5>
                        <div class="text">نحن نساعد العمال وأصحاب العمل على فهم حقوقهم وواجباتهم ونحن نقدم النصيحة القانونية اللازمة</div>
                    </div>
                </div>
                @endif

                @if ($practices['business_litigation'] ?? true)
                <!-- Practice Block -->
                <div class="practice-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon flaticon-law"></div>
                        <h5><a href="">التقاضي التجاري</a></h5>
                        <div class="text">نحن نقدم خدمات التمثيل القانوني في الدعاوى التجارية ونحن نعمل على تحقيق مصالح عملائنا</div>
                    </div>
                </div>
                @endif

                @if ($practices['workers_law'] ?? true)
                <!-- Practice Block -->
                <div class="practice-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon flaticon-balance"></div>
                        <h5><a href="">قانون العمال</a></h5>
                        <div class="text">نحن نقدم النصيحة القانونية للعمال والنقابات حول حقوق العمال وسلامة المكان الذي يعملون فيه</div>
                    </div>
                </div>
                @endif

                @if ($practices['family_law'] ?? true)
                <!-- Practice Block -->
                <div class="practice-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon flaticon-notebook"></div>
                        <h5><a href="">قانون العائلة</a></h5>
                        <div class="text">نحن نقدم النصيحة القانونية والدعم للأفراد والعائلات في جميع القضايا المتعلقة بالقانون الأسري</div>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>
</section>
<!-- End Practice Section -->

@endif
