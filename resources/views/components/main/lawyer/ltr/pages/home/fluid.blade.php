<!-- Fluid Section One -->
<section class="fluid-section-one mb-5 text-left">
    <div class="side-icon"><img src="images/icons/fluid-icon.png" alt="" /></div>
    <div class="outer-container clearfix">

        <!-- Content Column -->
        <div class="content-column">
            <x-main.lawyer.ltr.pages.home.contact :data="['lawyer' => $lawyer, 'user' => $user]" />
        </div>

        <!-- Image Column -->
        <div class="image-column clearfix" style="background-image:url('{{asset('assets/main/lawyer/images/background/2.jpg') }}')">
            <x-main.lawyer.ltr.pages.home.faq :data="['lawyer' => $lawyer, 'user' => $user]" />
        </div>



    </div>
</section>
<!-- Fluid Section One -->
