
<x-dashboard.lawyer.master title="{{ __('blog.ModifierBlog') }}">


    <div >

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
                            <li class="breadcrumb-item active">{{ __('blog.ModifierBlog') }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __('blog.ModifierBlog') }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 style="border-bottom: 1px solid #eee;" class="header-title mt-2 pb-2 text-center mb-3" >{{ __('blog.ModifierBlog') }} {{ $blog->title }}</h4>

                            <!-- Steps Information -->
                            <div class="tab-content">

                                <!-- Billing Content-->
                                <div class="tab-pane show active" id="billing-information">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form method="POST"  action="{{ route("lawyer.blogs.update", $blog->id ) }}" enctype="multipart/form-data">
                                                @csrf
                                                @method("PUT")
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="title" class="form-label">Title<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                name="title" value="{{ $blog->title }}" placeholder="Title"
                                                                id="title" />
                                                            @error('title')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="body" class="form-label">Body<span class="text-danger">*</span></label>
                                                            <textarea class="tinymce-editor form-control @error('body') is-invalid @enderror" name="body">{{ $blog->body }}</textarea>

                                                            @error('body')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div> <!-- end row -->

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="title_ar" class="form-label">Title_ar<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                name="title_ar" value="{{ $blog->title_ar }}" placeholder="Title_ar"
                                                                id="title_ar" />
                                                            @error('title_ar')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="body_ar" class="form-label">Body_ar<span class="text-danger">*</span></label>
                                                            <textarea class="tinymce-editor form-control @error('body_ar') is-invalid @enderror" name="body_ar">{{ $blog->body_ar }}</textarea>

                                                            @error('body_ar')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div> <!-- end row -->


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="image_link" class="form-label">Choisir image</label>
                                                            <input class="form-control @error('image_link') is-invalid @enderror"
                                                                name="image_link" type="file" id="image_blog" />
                                                            @error('image_link')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                            <div class="m-2 img_area_blog" id="img_area_blog">
                                                                <img class="avatar-xl" src="{{ asset($blog->image_link) }}" alt="image blog" />
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
    <!-- Row end -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/tn8jm84i32ivprnpp8w38lrtjk6b9rjxqe4abci0j7c2vh8m/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media ',
            // plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
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
