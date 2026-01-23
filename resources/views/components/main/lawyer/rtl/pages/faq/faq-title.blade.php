@props(['data'])

<!-- Page Title -->
<section dir="rtl" class="page-title style-two" style="background-image:url('{{ asset('assets/main/lawyer/images/background/2.jpg') }}')">
    <div class="auto-container">
        <ul dir="ltr" class="page-breadcrumb" >
            <li  style="letter-spacing: 0px;">{{ $data['faq']->question_ar ?? $data['faq']->question_fr }}</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->
