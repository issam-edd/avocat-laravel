<x-dashboard.lawyer.master title="{{ __('lawyerLanding.ModifySecondSection') }}">


    <div>

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ __('settings.Setting') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('lawyerLanding.ModifySecondSection') }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __('lawyerLanding.ModifySecondSection') }}</h4>
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
                                    <div class="col-lg-12">
                                        <h4 style="border-bottom: 1px solid #eee;" class="mt-2 pb-2 text-center mb-3">
                                            {{ __('lawyerLanding.ModifySecondSection') }}
                                        </h4>

                                        <form action="{{ route('lawyer.settings.landing.page.update', $landing->id) }}"
                                            enctype="multipart/form-data" method="POST">
                                            @method('PUT')
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12" @if (session()->get('locale') === 'ar') dir="rtl" @endif>
                                                    <div class="mb-3">
                                                        <label for="service_one_title" class="form-label">
                                                            {{ __('lawyerLanding.FirstServiceAddress') }}<span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text"
                                                            value="{{ $landing->service_one_title }}"
                                                            name="service_one_title"
                                                            placeholder="{{ __('lawyerLanding.FirstServiceAddress') }}"
                                                            id="service_one_title" />
                                                        @error('service_one_title')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="service_one_description" class="form-label">
                                                            {{ __('lawyerLanding.FirstDescriptionAddress') }}<span class="text-danger">*</span></label>
                                                        <textarea rows="5" class="form-control" name="service_one_description"
                                                            placeholder="{{ __('lawyerLanding.FirstDescriptionAddress') }}"
                                                            id="service_one_description">{{ $landing->service_one_description }}</textarea>
                                                        @error('service_one_description')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="text-primary">
                                                        <hr>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="service_two_title" class="form-label">
                                                            {{ __('lawyerLanding.SecondServiceAddress') }}<span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text"
                                                            value="{{ $landing->service_two_title }}"
                                                            name="service_two_title" placeholder="{{ __('lawyerLanding.SecondServiceAddress') }}"
                                                            id="service_two_title" />
                                                        @error('service_two_title')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="service_two_description" class="form-label">
                                                            {{ __('lawyerLanding.SecondDescriptionAddress') }}<span class="text-danger">*</span></label>
                                                        <textarea rows="5" class="form-control" type="text" name="service_two_description"
                                                            placeholder="{{ __('lawyerLanding.SecondDescriptionAddress') }}"
                                                            id="service_two_description">{{ $landing->service_two_description }}</textarea>
                                                        @error('service_two_description')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="text-primary">
                                                        <hr>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="service_three_title" class="form-label">
                                                            {{ __('lawyerLanding.ThirdServiceAddress') }}<span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text"
                                                            value="{{ $landing->service_three_title }}"
                                                            name="service_three_title"
                                                            placeholder="{{ __('lawyerLanding.ThirdServiceAddress') }}"
                                                            id="service_three_title" />
                                                        @error('service_three_title')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="service_three_description"
                                                            class="form-label">{{ __('lawyerLanding.ThirdDescriptionAddress') }}<span
                                                                class="text-danger">*</span></label>
                                                        <textarea rows="5" class="form-control" type="text" name="service_three_description"
                                                            placeholder="{{ __('lawyerLanding.ThirdDescriptionAddress') }}"
                                                            id="service_three_description">{{ $landing->service_three_description }}</textarea>
                                                        @error('service_three_description')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="text-primary">
                                                        <hr>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="service_four_title" class="form-label">
                                                            {{ __('lawyerLanding.FourthServiceAddress') }}<span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text"
                                                            value="{{ $landing->service_four_title }}"
                                                            name="service_four_title" placeholder="{{ __('lawyerLanding.FourthServiceAddress') }}"
                                                            id="service_four_title" />
                                                        @error('service_four_title')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="service_four_description"
                                                            class="form-label">{{ __('lawyerLanding.FourthDescriptionAddress') }}<span
                                                                class="text-danger">*</span></label>
                                                        <textarea rows="5" class="form-control" type="text" name="service_four_description"
                                                            placeholder="{{ __('lawyerLanding.FourthDescriptionAddress') }}"
                                                            id="service_four_description">{{ $landing->service_four_description }}</textarea>
                                                        @error('service_four_description')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="col-md-12" @if (session()->get('locale') === 'ar') dir="rtl" @endif>
                                                    <div class="mb-3">
                                                        <label for="service_one_title_ar" class="form-label">
                                                            {{ __('lawyerLanding.FirstServiceAddressAr') }}<span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text"
                                                            value="{{ $landing->service_one_title_ar }}"
                                                            name="service_one_title_ar"
                                                            placeholder="{{ __('lawyerLanding.FirstServiceAddressAr') }}"
                                                            id="service_one_title_ar" />
                                                        @error('service_one_title_ar')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="service_one_description_ar" class="form-label">
                                                            {{ __('lawyerLanding.FirstDescriptionAddressAr') }}<span class="text-danger">*</span></label>
                                                        <textarea rows="5" class="form-control" name="service_one_description_ar"
                                                            placeholder="{{ __('lawyerLanding.FirstDescriptionAddressAr') }}"
                                                            id="service_one_description_ar">{{ $landing->service_one_description_ar }}</textarea>
                                                        @error('service_one_description_ar')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="text-primary">
                                                        <hr>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="service_two_title_ar" class="form-label">
                                                            {{ __('lawyerLanding.SecondServiceAddressAr') }}<span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text"
                                                            value="{{ $landing->service_two_title_ar }}"
                                                            name="service_two_title_ar" placeholder="{{ __('lawyerLanding.SecondServiceAddressAr') }}"
                                                            id="service_two_title_ar" />
                                                        @error('service_two_title_ar')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="service_two_description_ar" class="form-label">
                                                            {{ __('lawyerLanding.SecondDescriptionAddressAr') }}<span class="text-danger">*</span></label>
                                                        <textarea rows="5" class="form-control" type="text" name="service_two_description_ar"
                                                            placeholder="{{ __('lawyerLanding.SecondDescriptionAddressAr') }}"
                                                            id="service_two_description_ar">{{ $landing->service_two_description_ar }}</textarea>
                                                        @error('service_two_description_ar')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="text-primary">
                                                        <hr>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="service_three_title_ar" class="form-label">
                                                            {{ __('lawyerLanding.ThirdServiceAddressAr') }}<span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text"
                                                            value="{{ $landing->service_three_title_ar }}"
                                                            name="service_three_title_ar"
                                                            placeholder="{{ __('lawyerLanding.ThirdServiceAddressAr') }}"
                                                            id="service_three_title_ar" />
                                                        @error('service_three_title_ar')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="service_three_description_ar"
                                                            class="form-label">{{ __('lawyerLanding.ThirdDescriptionAddressAr') }}<span
                                                                class="text-danger">*</span></label>
                                                        <textarea rows="5" class="form-control" type="text" name="service_three_description_ar"
                                                            placeholder="{{ __('lawyerLanding.ThirdDescriptionAddressAr') }}"
                                                            id="service_three_description_ar">{{ $landing->service_three_description_ar }}</textarea>
                                                        @error('service_three_description_ar')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="text-primary">
                                                        <hr>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="service_four_title_ar" class="form-label">
                                                            {{ __('lawyerLanding.FourthServiceAddressAr') }}<span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text"
                                                            value="{{ $landing->service_four_title_ar }}"
                                                            name="service_four_title_ar" placeholder="{{ __('lawyerLanding.FourthServiceAddressAr') }}"
                                                            id="service_four_title_ar" />
                                                        @error('service_four_title_ar')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="service_four_description_ar"
                                                            class="form-label">{{ __('lawyerLanding.FourthDescriptionAddressAr') }}<span
                                                                class="text-danger">*</span></label>
                                                        <textarea rows="5" class="form-control" type="text" name="service_four_description_ar"
                                                            placeholder="{{ __('lawyerLanding.FourthDescriptionAddressAr') }}"
                                                            id="service_four_description_ar">{{ $landing->service_four_description_ar }}</textarea>
                                                        @error('service_four_description_ar')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
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
