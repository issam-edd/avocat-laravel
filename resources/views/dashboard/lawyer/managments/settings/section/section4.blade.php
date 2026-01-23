<x-dashboard.lawyer.master title="{{ __('lawyerLanding.ModifyFourthSection') }}">


    <div>

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ __('settings.Setting') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('lawyerLanding.ModifyFourthSection') }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __('lawyerLanding.ModifyFourthSection') }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">


                        <!-- Steps Information -->
                        <div class="tab-content">
                            {{-- {{ print_r($faqs) }} --}}
                            <!-- Billing Content-->
                            <div class="tab-pane show active" id="billing-information">
                                <div class="row">
                                    <div class="col-lg-12"  @if (session()->get('locale') === 'ar') dir="rtl" @endif>
                                        <h4 style="border-bottom: 1px solid #eee;" class="mt-2 pb-2 text-center mb-3">
                                            {{ __('lawyerLanding.ModifyFourthSection') }}
                                        </h4>
                                        <form action="{{ route('lawyer.settings.landing.page.update',$landing->id) }}"
                                            enctype="multipart/form-data" method="POST">
                                            @method('PUT')
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label for="counter_years_experience"
                                                            class="form-label">{{ __('lawyerLanding.counterYearsExperience') }}<span
                                                                class="text-danger">*</span></label>
                                                        <input class="form-control" type="number"
                                                            name="counter_years_experience"
                                                            value="{{ $landing->counter_years_experience }}"
                                                            placeholder="{{ __('lawyerLanding.counterYearsExperience') }}"
                                                            id="counter_years_experience" />
                                                        @error('counter_years_experience')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label for="counter_clients"
                                                            class="form-label">{{ __('lawyerLanding.counterClients') }}<span
                                                                class="text-danger">*</span></label>
                                                        <input class="form-control" type="number"
                                                            name="counter_clients"
                                                            value="{{ $landing->counter_clients }}"
                                                            placeholder="{{ __('lawyerLanding.counterClients') }}"
                                                            id="counter_clients" />
                                                        @error('counter_clients')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label for="counter_cases"
                                                            class="form-label">{{ __('lawyerLanding.counterCases') }}<span
                                                                class="text-danger">*</span></label>
                                                        <input class="form-control" type="number"
                                                            name="counter_cases"
                                                            value="{{ $landing->counter_cases }}"
                                                            placeholder="{{ __('lawyerLanding.counterCases') }}" id="counter_cases" />
                                                        @error('counter_cases')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label for="counter_partners"
                                                            class="form-label">{{ __('lawyerLanding.counterPartners') }}<span
                                                                class="text-danger">*</span></label>
                                                        <input class="form-control" type="number"
                                                            name="counter_partners"
                                                            value="{{ $landing->counter_partners }}"
                                                            placeholder="{{ __('lawyerLanding.counterPartners') }}"
                                                            id="counter_partners" />
                                                        @error('counter_partners')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row mt-4" @if (session()->get("locale") === "ar") dir="rtl"  @endif>
                                                <div class="col-sm-6">
                                                    <a href="{{ route('lawyer.index') }}"
                                                        class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                        <i class="mdi mdi-arrow-right"></i>
                                                        {{ __('lawyer.back_home') }} </a>
                                                </div> <!-- end col -->
                                                <div class="col-sm-6">
                                                    <div class="text-sm-end d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-success">
                                                            <i class="mdi mdi-content-save-outline me-1"></i>
                                                            {{ __('lawyer.update') }}
                                                        </button>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div>
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
</x-dashboard.lawyer.master>
