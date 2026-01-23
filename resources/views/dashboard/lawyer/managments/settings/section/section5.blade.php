<x-dashboard.lawyer.master title="{{ __('lawyerLanding.ModifyFifthSection') }}">


    <div>

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ __('settings.Setting') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('lawyerLanding.ModifyFifthSection') }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __('lawyerLanding.ModifyFifthSection') }}</h4>
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
                                    <div class="col-lg-12"@if (session()->get('locale') === 'ar') dir="rtl" @endif>
                                        <h4 style="border-bottom: 1px solid #eee;" class="mt-2 pb-2 text-center mb-3">
                                            {{ __('lawyerLanding.ModifyFifthSection') }}
                                        </h4>
                                        <form action="{{ route('lawyer.settings.landing.page.update',$landing->id) }}"
                                            enctype="multipart/form-data" method="POST">
                                            @method('PUT')
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="faq_id_one" class="form-label">{{ __('lawyerLanding.FirstFAQ') }}<span class="text-danger">*</span></label>
                                                        <select class="form-control" name="faq_id_one">
                                                            <option value="" disabled selected>{{ __('lawyerLanding.FirstFAQ') }}</option>
                                                            @foreach ($faqs as $faq )
                                                                <option
                                                                @if ($faq->id === $landing->faq_id_one)
                                                                    selected
                                                                @endif
                                                                value="{{ $faq->id }}">
                                                                    <p>
                                                                        {{ $faq->question_fr }}
                                                                    </p>
                                                                    <p dir="rtl">
                                                                        {{ $faq->question_ar }}
                                                                    </p>
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('faq_id_one')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="faq_id_two" class="form-label">{{ __('lawyerLanding.SecondFAQ') }}<span class="text-danger">*</span></label>
                                                        <select class="form-control"  name="faq_id_two">
                                                            <option value="" disabled selected>{{ __('lawyerLanding.SecondFAQ') }}</option>
                                                            @foreach ($faqs as $faq )
                                                                <option
                                                                    @if ($faq->id === $landing->faq_id_two)
                                                                        selected
                                                                    @endif
                                                                    value="{{ $faq->id }}">
                                                                    <p>
                                                                        {{ $faq->question_fr }}
                                                                    </p>
                                                                    <p dir="rtl">
                                                                        {{ $faq->question_ar }}
                                                                    </p>
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('faq_id_two')
                                                            <div class="alert text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="faq_id_three" class="form-label">{{ __('lawyerLanding.ThirdFAQ') }}<span class="text-danger">*</span></label>
                                                        <select class="form-control"  name="faq_id_three">
                                                            <option value="" disabled selected>{{ __('lawyerLanding.ThirdFAQ') }}</option>
                                                            @foreach ($faqs as $faq )
                                                                <option
                                                                    @if ($faq->id === $landing->faq_id_three)
                                                                        selected
                                                                    @endif
                                                                    value="{{ $faq->id }}">
                                                                    <p>
                                                                        {{ $faq->question_fr }}
                                                                    </p>
                                                                    <p dir="rtl">
                                                                        {{ $faq->question_ar }}
                                                                    </p>
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('faq_id_three')
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
