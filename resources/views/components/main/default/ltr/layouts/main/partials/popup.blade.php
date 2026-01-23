<div class="popup__container" id="popup-container">
    <!-- Popup overlar -->
    <div class="popup__overlay" id="popup-overlay"></div>

    <!-- Popup activator -->
    <div class="popup__activator" id="popup-activator">
        <img src="{{ asset('assets/main/default/img/write-message.png') }}" />
        <p>{{ __('siteweb.free_consultation') }}</p>
    </div>

    <!-- Popup content -->
    <div class="popup__content">
        <form class="bg-white rounded p-4 pb-0 tw-relative" action="{{ route("lawyers.contact.send.all") }}" method="POST">
            @csrf
            <div class="tw-flex tw-justify-end tw-absolute tw-top-0 tw-right-0">
                <img src="{{ asset('images/logos/logo-sm.png') }}" width="80" />
            </div>
            <div class="row">
                <div dir="ltr" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-left">
                    <div class="form-group ">
                        <p class="theme-cl-s m-0">
                            {{ __('siteweb.ask_lawyer') }}
                        </p>
                        <h3 class="mb-3 tw-text-xl text-center text-md-left mt-n2 ft-bold text-muted">
                            {{ __('siteweb.free_consultation') }}
                        </h3>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="small text-dark ft-medium">{{ __('siteweb.fullname') }}</label>
                                <input type="text" name="fullname" class="form-control" required placeholder="{{ __('siteweb.fullname') }}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="small text-dark ft-medium">{{ __('siteweb.phone') }}</label>
                                <input type="text" name="phone" class="form-control" required placeholder="{{ __('siteweb.phone') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <label class="small text-dark ft-medium">{{ __('siteweb.email') }}</label>
                                <input type="text" name="email" class="form-control" placeholder="{{ __('siteweb.email') }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group position-relative tw-mb-7">
                        <label class="small text-dark ft-medium">{{ __('siteweb.question') }}</label>
                        <input type="text" name="question" class="form-control" required placeholder="{{ __('siteweb.question') }}">
                    </div>

                    <div class="form-group position-relative mb-0 tw-mt-4">
                        <button class="btn full-width custom-height-lg theme-bg-s text-white tw-mt-4 fs-md" type="submit">{{ __('siteweb.send') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
