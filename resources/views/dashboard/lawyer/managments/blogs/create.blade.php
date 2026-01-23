
<x-dashboard.lawyer.master title="{{__('lawyer.add_blog')}}">


    <div class="{{ session()->get('locale') === 'ar' ? 'text-right' : '' }}" dir="{{ session()->get('locale') === 'ar' ? 'rtl' : 'ltr' }}">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">{{__('lawyer.add_blog')}}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 style="border-bottom: 1px solid #eee;" class="header-title mt-2 pb-2 text-center mb-3" >{{__('lawyer.blog_informations')}}</h4>

                            <!-- Steps Information -->
                            <div class="tab-content">

                                <!-- Billing Content-->
                                <div class="tab-pane show active" id="billing-information">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form method="POST" action="{{ route("lawyer.blogs.store") }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="title" class="form-label">{{ __('lawyer.blog_title') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                name="title" value="{{ old("title") }}" placeholder="{{ __('lawyer.blog_title_placeholder') }}"
                                                                id="title" />
                                                            @error('title')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="body" class="form-label">{{ __('lawyer.blog_body') }}<span class="text-danger">*</span></label>
                                                            <textarea
                                                                placeholder="{{ __('lawyer.blog_body') }}"
                                                                class="tinymce-editor form-control @error('body') is-invalid @enderror" name="body">{{ old("body") }}</textarea>

                                                            @error('body')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div> <!-- end row -->

                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="title_ar" class="form-label">{{ __('lawyer.blog_title_ar') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                name="title_ar" value="{{ old("title_ar") }}" placeholder="{{ __('lawyer.blog_title_ar_placeholder') }}"
                                                                id="title_ar" />
                                                            @error('title_ar')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="blog_body_ar" class="form-label">{{ __('lawyer.blog_body_ar') }}<span class="text-danger">*</span></label>
                                                            <textarea
                                                                placeholder="{{ __('lawyer.blog_body_ar') }}"
                                                                class="tinymce-editor form-control @error('body_ar') is-invalid @enderror" name="body_ar">{{ old("body_ar") }}</textarea>

                                                            @error('body_ar')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div> <!-- end row -->

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="image_link" class="form-label">{{ __('lawyer.image') }}</label>
                                                            <input class="form-control @error('image_link') is-invalid @enderror"
                                                                name="image_link" type="file" id="image_blog" />
                                                            @error('image_link')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                            <div class="m-2 img_area_blog" id="img_area_blog">
                                                            </div>
                                                            {{-- <div class="m-2 img_area_favicon" id="display_image_blog">
                                                                <img class="avatar-xl" src="{{ asset($image_favicon) }}" alt="">
                                                            </div> --}}
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/tn8jm84i32ivprnpp8w38lrtjk6b9rjxqe4abci0j7c2vh8m/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea',
            // plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount  export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media ',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ]
        });
    </script>
</x-dashboard.admin.master >
