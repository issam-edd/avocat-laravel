<div class="col-xl-7 col-lg-8 col-md-12 col-sm-12">
    <form class="row" action="{{ route('contact.admin.send') }}" method="POST">
        @csrf
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="form-group">
                <label class="small text-dark ft-medium">{{ __('siteweb.firstname') }}</label>
                <input type="text" name="first_name" class="form-control" required placeholder="{{ __('siteweb.firstname') }}">
            </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="form-group">
                <label class="small text-dark ft-medium">{{ __('siteweb.lastname') }}</label>
                <input type="text" name="last_name" class="form-control" required placeholder="{{ __('siteweb.lastname') }}">
            </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="form-group">
                <label class="small text-dark ft-medium">{{ __('siteweb.phone') }}</label>
                <input type="text" name="phone_number" class="form-control" required placeholder="{{ __('siteweb.phone') }}">
            </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="form-group">
                <label class="small text-dark ft-medium">{{ __('siteweb.email') }}</label>
                <input type="text" name="email" class="form-control" required placeholder="{{ __('siteweb.email') }}">
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="form-group">
                <label class="small text-dark ft-medium">{{ __('siteweb.message') }}</label>
                <textarea name="body" required placeholder="{{ __('siteweb.message') }}" class="form-control tw-border-none tw-border-black !tw-border-solid !tw-border-black ht-80"></textarea>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="form-group d-flex justify-content-end">
                <button type="submit" class="btn btn-dark theme-bg-s">{{ __('siteweb.send') }}</button>
            </div>
        </div>

    </form>
</div>
