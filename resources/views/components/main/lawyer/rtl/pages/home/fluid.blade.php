<!-- Fluid Section One -->
<section class="fluid-section-one mb-5 text-right">
		<div class="side-icon"><img src="images/icons/fluid-icon.png" alt="" /></div>
    	<div class="outer-container clearfix">
            <!-- Image Column -->
            <div class="image-column clearfix" style="background-image:url('{{asset('assets/main/lawyer/images/background/2.jpg') }}')">
                <x-main.lawyer.rtl.pages.home.faq :data="['lawyer' => $lawyer, 'user' => $user]" />
            </div>

        	<!-- Content Column -->
            <div class="content-column">
            	<x-main.lawyer.rtl.pages.home.contact :data="['lawyer' => $lawyer, 'user' => $user]" />
			</div>

		</div>
	</section>
	<!-- Fluid Section One -->
