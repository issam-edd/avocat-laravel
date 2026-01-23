<!-- Contact Form Section -->
<section dir="ltr" class="contact-form-section text-left">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>{{ __('lawyer.free_consultation') }}</h2>
            @if(session()->has('success'))
                <p class="text-success">Le message est envoyé !</p>
            @endif
        </div>
        <!-- Contact Form -->
        <div class="contact-form">

            <form method="post" action="{{ route('lawyers.contact.send', $lawyer->lawyer_id) }}">
                @csrf
                <div class="row clearfix">

                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" name="first_name" placeholder="{{ __('siteweb.firstname') }}" required>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" name="last_name" placeholder="{{ __('siteweb.lastname') }}" required>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                        <input type="text" name="phone_number" placeholder="{{ __('siteweb.phone') }}" required>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                        <input type="text" name="email" placeholder="{{ __('siteweb.email') }}" required>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <textarea name="body" placeholder="{{ __('siteweb.message') }}" required></textarea>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group d-flex justify-content-end">
                        <button class="theme-btn btn-style-two" type="submit" name="submit-form">
                            <span class="txt">
                            {{ __('siteweb.send') }}
                            </span>
                        </button>
                    </div>

                </div>
            </form>

            <!--End Contact Form -->
        </div>
    </div>
</section>
<!-- End Contact Form Section -->
