
<x-dashboard.lawyer.master title="{{ __('lawyer.faq_modify') }}">


    <div class="{{ session()->get('locale') === 'ar' ? 'text-right' : 'text-left' }}" dir="{{ session()->get('locale') === 'ar' ? 'rtl' : 'ltr' }}">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                    <h4 class="page-title">{{ __('lawyer.faq_modify') }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{ $faq->question_fr }} </h4>


                            <!-- Steps Information -->
                            <div class="tab-content">

                                <!-- Billing Content-->
                                <div class="tab-pane show active" id="billing-information">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="mt-2">Modifier La Qs. {{ $faq->question_fr }}</h4>
                                            <form method="POST" action="{{ route("lawyer.faqs.update", $faq->id ) }}" enctype="multipart/form-data">
                                                @method("PUT")
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="question_fr" class="form-label">Question Francer<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('question_fr') is-invalid @enderror"
                                                                type="text"
                                                                name="question_fr" value="{{ $faq->question_fr }}" placeholder="Question Francer"
                                                                id="question_fr" />
                                                            @error('question_fr')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="question_ar" class="form-label">Question Arabic<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('question_ar') is-invalid @enderror"
                                                                type="text"
                                                                name="question_ar" value="{{ $faq->question_ar }}" placeholder="Question Arabic"
                                                                id="question_ar" />
                                                            @error('question_ar')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="answer_fr" class="form-label">Réponse Francer<span class="text-danger">*</span></label>
                                                            <textarea class="form-control @error('answer_fr') is-invalid @enderror"
                                                                type="text" rows="5"
                                                                name="answer_fr" placeholder="Réponse Francer"
                                                                id="answer_fr">{{ $faq->answer_fr }}</textarea>
                                                            @error('answer_fr')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="answer_ar" class="form-label">Réponse Arabic<span class="text-danger">*</span></label>
                                                            <textarea class="form-control @error('answer_ar') is-invalid @enderror"
                                                                type="text" rows="5"
                                                                name="answer_ar" placeholder="Réponse Arabic"
                                                                id="answer_ar">{{ $faq->answer_ar }}</textarea>
                                                            @error('answer_ar')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="switch4" class="form-label">Publier</label>
                                                            <div>
                                                                <input type="checkbox" name="is_published"
                                                                {{ $faq->is_published === "on" ? "checked" : "" }}
                                                                id="is_published" data-switch="info"/>
                                                                <label for="is_published" data-on-label="On" data-off-label="Off"></label>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div> <!-- end row -->

                                                <div class="row mt-4">
                                                    <div class="col-sm-6">
                                                        <a href="{{ route("lawyer.index") }}" class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                            <i class="mdi mdi-arrow-left"></i> Return to Home Page </a>
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="text-sm-end">
                                                            <button type="submit" class="btn btn-danger">
                                                                <i class="mdi mdi-content-save-outline me-1"></i> Sauvegarder
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
</x-dashboard.admin.master >
