
<x-dashboard.lawyer.master title="{{ __('lawyer.add_faq') }}">


    <div class=" {{ session()->get('locale') === 'ar' ? 'text-right' : 'text-left' }}" dir="{{ session()->get('locale') === 'ar' ? 'rtl' : 'ltr' }}">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">{{ __('lawyer.add_faq') }}</h4>
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

                                <!-- Billing Content-->
                                <div class="tab-pane show active" id="billing-information">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="mt-2">{{ __('lawyer.add_faq') }}</h4>
                                            <form method="POST" action="{{ route("lawyer.faqs.store") }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="question_fr" class="form-label">{{ __('lawyer.question_fr') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('question_fr') is-invalid @enderror"
                                                                type="text"
                                                                name="question_fr" value="{{ old("question_fr") }}" placeholder="{{ __('lawyer.question_fr') }}"
                                                                id="question_fr" />
                                                            @error('question_fr')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="question_ar" class="form-label">{{ __('lawyer.question_ar') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('question_ar') is-invalid @enderror"
                                                                type="text"
                                                                name="question_ar" value="{{ old("question_ar") }}" placeholder="{{ __('lawyer.question_ar') }}"
                                                                id="question_ar" />
                                                            @error('question_ar')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="answer_fr" class="form-label">{{ __('lawyer.answer_fr') }}<span class="text-danger">*</span></label>
                                                            <textarea class="form-control @error('answer_fr') is-invalid @enderror"
                                                                type="text" rows="5"
                                                                name="answer_fr" placeholder="{{ __('lawyer.answer_fr') }}"
                                                                id="answer_fr">{{ old("answer_fr") }}</textarea>
                                                            @error('answer_fr')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="answer_ar" class="form-label">{{ __('lawyer.answer_ar') }}<span class="text-danger">*</span></label>
                                                            <textarea class="form-control @error('answer_ar') is-invalid @enderror"
                                                                type="text" rows="5"
                                                                name="answer_ar" placeholder="{{ __('lawyer.answer_ar') }}"
                                                                id="answer_ar">{{ old("answer_ar") }}</textarea>
                                                            @error('answer_ar')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="switch4" class="form-label">{{  __('lawyer.publier')}}</label>
                                                            <div>
                                                                <input type="checkbox" name="is_published"
                                                                {{ old("is_published") === "on" ? "checked" : "" }}
                                                                id="is_published" data-switch="info"/>
                                                                <label for="is_published" data-on-label="On" data-off-label="Off"></label>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div> <!-- end row -->

                                                <div class="row mt-4">
                                                    <div class="col-sm-6">
                                                        <a href="{{ route("lawyer.index") }}" class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                            <i class="mdi mdi-arrow-right"></i> {{ __('lawyer.back_home') }} </a>
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="text-sm-end d-flex justify-content-end">
                                                            <button type="submit" class="btn btn-success">
                                                                <i class="mdi mdi-content-save-outline me-1"></i>
                                                                {{ __('lawyer.create') }}
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
    <!-- Row end -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/tn8jm84i32ivprnpp8w38lrtjk6b9rjxqe4abci0j7c2vh8m/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ]
        });
    </script> --}}
</x-dashboard.admin.master >
