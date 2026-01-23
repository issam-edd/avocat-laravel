

<!-- ======================= Login Form ======================== -->
<div class="home-banner margin-bottom-0 theme-bg-s intro-banner">
    <div class="container">
    {{ session()->get('error') }}

        <div class="row align-items-center justify-content-center">
            <div class="col-lg-offset-3 col-xl-5 col-lg-7 col-md-7 col-sm-12 col-12">
                <form class="bg-white rounded p-4" action="{{ route("verify.otp") }}" method="POST">
                    @csrf
                    <div class="row">
                        <div  class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="form-group">
                                <p class="fs-md mt-2 text-muted tw-text-lg">{{__('auth.confirm')}}</p>
                            </div>

                            <div class="form-group position-relative">
                                <input type="text" class="form-control lg " name="otp" placeholder="{{ __('auth.confirm_placeholder') }}" />
                                @if (session()->has('error'))
                                        <small id="emailHelp" class="form-text text-danger">{{__('auth.confirm_invalid')}}</small>
                                @else
                                    @error('email')
                                        <small id="emailHelp" class="form-text text-danger">{{__('auth.confirm_invalid')}}</small>
                                    @enderror
                                @endif
                            </div>
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
