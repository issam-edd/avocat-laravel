
<x-dashboard.admin.master title="Settings Website">


    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
                            <li class="breadcrumb-item active">Settings Website</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Settings Website</h4>
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
                                            <h4 class="mt-2">Website information</h4>
                                            <form action="{{ route("admin.settings.update") }}" enctype="multipart/form-data" method="POST">
                                                @method("PUT")
                                            {{-- <form action="{{ route("admin.settings.store") }}" enctype="application/x-www-form-urlencoded" method="POST"> --}}
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="siteweb_name_fr" class="form-label">Change siteweb name fr<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                value="{{ $siteweb_name_fr }}" name="siteweb_name_fr"
                                                                placeholder="Change siteweb name fr" id="siteweb_name_fr" />
                                                            @error('siteweb_name_fr')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="siteweb_name_ar" class="form-label">Change siteweb name ar<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                value="{{ $siteweb_name_ar }}" name="siteweb_name_ar"
                                                                placeholder="Change siteweb name ar" id="siteweb_name_ar" />
                                                            @error('siteweb_name_ar')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div> <!-- end row -->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="addresse1" class="form-label">Change Address 1<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                value="{{ $addresse1 }}" name="addresse1"
                                                                placeholder="Change addresse 1" id="addresse1" />
                                                            @error('addresse1')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="addresse2" class="form-label">Change Address 2<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                value="{{ $addresse2 }}" name="addresse2"
                                                                placeholder="Change addresse 2" id="addresse2" />
                                                            @error('addresse2')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div> <!-- end row -->

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="tel1" class="form-label">Numero Tel 1<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                value="{{ $tel1 }}" name="tel1"
                                                                placeholder="Change numero tel 1" id="tel1" />
                                                            @error('tel1')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="tel2" class="form-label">Numero Tel 2<span class="text-danger">*</span></label>
                                                            <input name="tel2" class="form-control" type="text"
                                                                value="{{ $tel2 }}" name="tel2"
                                                                placeholder="Change numero tel 2" id="tel2" />
                                                            @error('tel2')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div> <!-- end row -->
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label for="localisation" class="form-label">Localisation<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                value="{{ $localisation }}" name="localisation"
                                                                placeholder="Change localisation" id="localisation">
                                                            @error('localisation')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label for="ville" class="form-label">Ville<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                value="{{ $ville }}" name="ville"
                                                                placeholder="Change ville" id="ville" />
                                                            @error('ville')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div> <!-- end row -->

                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label for="keywords_ar" class="form-label">keywords AR<span class="text-danger">*</span></label>
                                                            <textarea rows="5" class="form-control" name="keywords_ar"
                                                                placeholder="Change keywords AR" id="keywords_ar">{{ $keywords_ar }}</textarea>
                                                            @error('keywords_ar')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label for="keywords_fr" class="form-label">keywords FR<span class="text-danger">*</span></label>
                                                            <textarea rows="5" class="form-control" name="keywords_fr"
                                                                placeholder="Change keywords AR" id="keywords_fr">{{ $keywords_fr }}</textarea>
                                                            @error('keywords_fr')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label for="desciption_ar" class="form-label">desciption AR<span class="text-danger">*</span></label>
                                                            <textarea rows="5" class="form-control" name="desciption_ar"
                                                                placeholder="Change desciption AR" id="desciption_ar">{{ $desciption_ar }}</textarea>
                                                            @error('desciption_ar')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label for="desciption_fr" class="form-label">desciption FR<span class="text-danger">*</span></label>
                                                            <textarea rows="5" class="form-control" name="desciption_fr"
                                                                placeholder="Change desciption AR" id="desciption_fr">{{ $desciption_fr }}</textarea>
                                                            @error('desciption_fr')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="scripts" class="form-label">scripts<span class="text-danger">*</span></label>
                                                            <textarea rows="5" class="form-control" name="scripts"
                                                                placeholder="Change desciption AR" id="scripts">{{ $scripts }}</textarea>
                                                            @error('scripts')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- end row -->
                                                {{-- Image de site web --}}
                                                {{--
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="image_favicon" class="form-label">Favicon</label>
                                                            <input class="form-control" type="file" id="image_favicon" name="image_favicon" />
                                                            @error('image_favicon')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                            <div class="m-2 img_area_favicon" id="display_image_favicon">
                                                                <img class="avatar-xl" src="{{ asset($image_favicon) }}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="image_logo" class="form-label">Logo png</label>
                                                            <input class="form-control"
                                                            type="file"  id="image_logo" name="image_logo" />
                                                            @error('image_logo')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                            <div class="m-2 img_area_image_logo" id="display_image_logo">
                                                                <img class="avatar-xl" src="{{ asset($image_logo) }}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="image_logo_big" class="form-label">Logo big png</label>
                                                            <input class="form-control" name="image_logo_big" type="file" id="image_logo_big" />
                                                            @error('image_logo_big')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                            <div class="m-2 img_area_image_logo_big" id="display_image_logo_big">
                                                                <img class="avatar-xl" src="{{ asset($image_logo_big) }}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                --}}

                                                <div class="row mt-4">
                                                    <div class="col-sm-6">
                                                        <a href="{{ route("admin.index") }}" class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                            <i class="mdi mdi-arrow-left"></i> Return to Home Page </a>
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="text-sm-end">
                                                            <button type="submit" class="btn btn-danger">
                                                                <i class="mdi mdi-content-save-outline me-1"></i> Sauvegarder Change
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
