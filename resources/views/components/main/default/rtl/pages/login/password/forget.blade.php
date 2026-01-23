<!-- ======================= Login Form ======================== -->
<div class="home-banner margin-bottom-0 theme-bg-s intro-banner">
    <div class="container">

        <div class="row align-items-center justify-content-center">
            <div class="col-lg-offset-3 col-xl-5 col-lg-7 col-md-7 col-sm-12 col-12">
                <form  method="POST" action="{{ route('request.opt') }}" class="bg-white rounded p-4">
                    {{-- <form  method="POST" action="{{ route('login') }}" class="bg-white rounded p-4"> --}}
                    @csrf
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 {{ Config::get('app.locale') === 'ar' ? 'text-right' : '' }}">
                            <div class="form-group">
                                <h2 class="mb-0 ft-bold">{{ __('form.login_form_title') }}</h2>
                                <p class="fs-md mt-2 text-muted">{{ __('form.login_form_subtitle') }}</p>
                            </div>

                            <div class="form-group position-relative">
                                <input type="email" id="email" class="form-control lg " placeholder="{{ __('form.email') }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                @error('email')
                                    <small id="emailHelp" class="form-text text-danger">{{__('auth.failed')}}</small>
                                @enderror
                            </div>
                            <div class="form-group position-relative">
                                <input id="password" type="password" class="form-control lg" name="password" required autocomplete="current-password" placeholder="{{ __('form.password') }}" />
                            </div>
                            @if (Route::has('password.request'))
                            <div class="form-group position-relative">
                                <a class="text-muted" href="{{ route('password.request') }}" >{{__('passwords.forget') }}</a>
                            </div>
                            @endif
                            <div class="form-group position-relative">
                                <button class="btn full-width custom-height-lg theme-bg-s text-white fs-md" type="submit">{{__('form.confirm_btn')}}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>
<!-- ======================= Login Form ======================== -->
