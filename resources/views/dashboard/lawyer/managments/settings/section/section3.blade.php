<x-dashboard.lawyer.master title="{{ __('lawyerLanding.ModifyThirdSection') }}">


    <div>

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ __('settings.Setting') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('lawyerLanding.ModifyThirdSection') }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __('lawyerLanding.ModifyThirdSection') }}</h4>
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
                                            {{ __('lawyerLanding.ModifyThirdSection') }}
                                        </h4>

                                        <form action="{{ route('lawyer.settings.landing.page.update',$landing->id) }}"
                                            enctype="multipart/form-data" method="POST">
                                            @method('PUT')
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="about_me_text" class="form-label">{{ __('lawyerLanding.TextAboutMe') }}<span class="text-danger">*</span></label>
                                                        <textarea rows="5" class="form-control" type="text" name="about_me_text"
                                                            placeholder="{{ __('lawyerLanding.TextAboutMe') }}" id="about_me_text">{{ $landing->about_me_text }}</textarea>
                                                        @error('about_me_text')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="about_me_text_ar" class="form-label">{{ __('lawyerLanding.TextAboutMeAr') }}<span class="text-danger">*</span></label>
                                                        <textarea rows="5" class="form-control" type="text" name="about_me_text_ar"
                                                            placeholder="{{ __('lawyerLanding.TextAboutMeAr') }}" id="about_me_text_ar">{{ $landing->about_me_text_ar }}</textarea>
                                                        @error('about_me_text_ar')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="about_me_image" class="form-label">{{ __('lawyerLanding.image_about_me') }}<span class="text-danger">*</span></label>
                                                        <input class="form-control"
                                                            type="file"  id="about_me_image" name="about_me_image" />
                                                        @error('about_me_image')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                        <div class="m-2 img_area_about_me_image" id="display_about_me_image">
                                                            <img class="avatar-xl" src="{{ asset($landing->about_me_image) }}" alt="">
                                                        </div>
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
