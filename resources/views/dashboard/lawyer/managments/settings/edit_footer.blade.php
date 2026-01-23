
<x-dashboard.lawyer.master title="Modifier le footer">


    <div class="container-fluid {{ session()->get('locale') === 'ar' ? 'text-right' : 'text-left' }}" dir="{{ session()->get('locale') === 'ar' ? 'rtl' : 'ltr' }}">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">{{ __('lawyer.contact_config') }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">{{ __('lawyer.contact_config_desc') }}</h4>


                            <!-- Steps Information -->
                            <div class="tab-content">
                                <!-- Billing Content-->
                                <div class="tab-pane show active" id="billing-information">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form method="POST" action="{{ route("lawyer.settings.footer.page.update",$footer->id) }}" enctype="multipart/form-data">
                                                @method("PUT")
                                                @csrf
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-3">
                                                            <label for="phone_number_one" class="form-label">{{ __('lawyer.phone_one') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                name="phone_number_one" value="{{ $footer->phone_number_one }}" placeholder="{{ __('lawyer.phone_one') }}"
                                                                id="phone_number_one" />
                                                            @error('phone_number_one')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-3">
                                                            <label for="phone_number_two" class="form-label">{{ __('lawyer.phone_two') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                name="phone_number_two" value="{{ $footer->phone_number_two }}" placeholder="{{ __('lawyer.phone_two') }}"
                                                                id="phone_number_two" />
                                                            @error('phone_number_two')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-3">
                                                            <label for="email_address_one" class="form-label">{{ __('lawyer.email_one') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                name="email_address_one" value="{{ $footer->email_address_one }}" placeholder="{{ __('lawyer.email_one') }}"
                                                                id="email_address_one" />
                                                            @error('phone_number_one')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-3">
                                                            <label for="email_address_two" class="form-label">{{ __('lawyer.email_two') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                name="email_address_two" value="{{ $footer->email_address_two }}" placeholder="{{ __('lawyer.email_two') }}"
                                                                id="email_address_two" />
                                                            @error('email_address_two')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-3">
                                                            <label for="address" class="form-label">{{ __('lawyer.adresse') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                name="address" value="{{ $footer->address }}" placeholder="address"
                                                                id="address" />
                                                            @error('title')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div> <!-- end row -->
                                                {{-- email_address_one --}}


                                                <div class="row mt-4">
                                                    <div class="col-sm-6">
                                                        <a href="{{ route("lawyer.index") }}" class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                            <i class="mdi mdi-arrow-right"></i> {{ __('lawyer.back_home') }} </a>
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="text-sm-end d-flex justify-content-end">
                                                            <button type="submit" class="btn btn-success">
                                                                <i class="mdi mdi-content-save-outline me-1"></i>
                                                                {{ __('lawyer.update') }}
                                                            </button>
                                                        </div>
                                                        
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->
                                            </form>
                                        </div>

                                    </div> <!-- end row-->
                                </div>
                                <!-- End Billing Information Content-->

                            </div> <!-- end tab content-->


                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->

    </div>

</x-dashboard.lawyer.master >
