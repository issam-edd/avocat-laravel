<!-- Contact Info Section -->
<section class="contact-info-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>Our Infromation</h2>
        </div>
        <div class="row clearfix">

            <!-- Info Block -->
            <div class="info-block h-100 col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon flaticon-location-pin"></div>
                    <h5>Location</h5>
                    <div class="text">{{ $lawyer->address }}</div>
                </div>
            </div>

            <!-- Info Block -->
            <div class="info-block h-100 col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon flaticon-smartphone"></div>
                    <h5>Phone</h5>
                    <ul class="info-list">
                        <li><a href="tel:{{ $lawyer->phone_number }}">{{ $lawyer->phone_number }}</a></li>
                    </ul>
                </div>
            </div>

            <!-- Info Block -->
            <div class="info-block h-100 col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon flaticon-email-3"></div>
                    <h5>Email</h5>
                    <ul class="info-list">
                        <li><a href="mailto:{{ $lawyer->user->email }}">{{ $lawyer->user->email }}</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Contact Info Section -->
