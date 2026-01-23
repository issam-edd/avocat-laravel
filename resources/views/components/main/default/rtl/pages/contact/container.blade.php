@props(['data'])

@php
	$options = $data['options'];
@endphp
<!-- ======================= Contact Page Detail ======================== -->
<section class="middle">
	<div class="container">

		<div class="row justify-content-center mb-5">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="sec_title position-relative text-center">
					<h1 class=" text-black-50 text-muted tw-text-2xl">تواصل <span class="theme-cl-s">معنا</span></h1>
					@if(session()->has('success'))
						<p class="text-success">{{ session()->get('success') }}</p>
					@endif
				</div>
			</div>
		</div>

		<div class="row align-items-start justify-content-between">


			<x-main.default.rtl.pages.contact.form  />

			<x-main.default.rtl.pages.contact.information :data="['options' => $options]" />


		</div>
	</div>
</section>
<!-- ======================= Contact Page End ======================== -->
