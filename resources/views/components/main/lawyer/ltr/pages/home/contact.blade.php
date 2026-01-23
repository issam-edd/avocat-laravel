<div class="inner-column text-left" dir="ltr">
    <div class="sec-title">
        <h2>{{ __('lawyer.free_consultation') }}</h2>
        @if(session()->has('success'))
            <p class="text-success">{{ session()->get('success') }}</p>
        @endif
    </div>

    <!-- Default Form -->
    <div class="default-form">
        <form method="post" action="{{ route('lawyers.contact.send', $lawyer->lawyer_id) }}">
            @csrf
            <div class="row clearfix">

                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                    <input type="text" name="first_name" placeholder="{{ __('siteweb.firstname') }}" required>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                    <input type="text" name="last_name" placeholder="{{ __('siteweb.lastname') }}" required>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <input type="text" name="phone_number" placeholder="{{ __('siteweb.phone') }}" required>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <input type="text" name="email" placeholder="{{ __('siteweb.email') }}" required>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    <textarea name="body" placeholder="{{ __('siteweb.message') }}"></textarea>
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
    </div>
    <!-- End Default Form -->

</div>
