<x-dashboard.admin.master title="Information d'faqs">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Profile</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-sm-12">
                <!-- Profile -->
                <div class="card bg-white">
                    <div class="card-body profile-user-box">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="">
                                            @if (!!$faq->user->profile_image)
                                                <img src="{{ asset($faq->user->profile_image) }}" class="rounded-circle img-thumbnail avatar-lg"
                                                    alt="image">
                                            @else
                                                <img src="{{ asset('images/dashboard/users/profile_default.jpg') }}"
                                                    alt="image" class="rounded-circle img-thumbnail avatar-lg">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <h4 class="mt-1 mb-1 text-muted">
                                                {{ $faq->user->first_name . ' ' . $faq->user->last_name }}</h4>
                                            <p class="font-13 text-muted-50">
                                            <h3>
                                                @if ($faq->user->lawyerDetail->is_premium)
                                                    <span class="badge bg-info">
                                                        <i class="mdi mdi-check-decagram"></i>
                                                        Premium
                                                    </span>
                                                @else
                                                    <span class="badge bg-secondary">Normal</span>
                                                @endif
                                            </h3>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->

                            <div class="col-sm-4">
                                <div class="text-center mt-sm-0 mt-3 text-sm-end">
                                    <a href="{{ route('admin.avocats.show', $faq->user->id) }}" class="btn btn-light">
                                        <i class="mdi mdi mdi-open-in-new me-1"></i> Show Profile
                                    </a>
                                    <a href="{{ route('admin.avocats.edit', $faq->user->id) }}" class="btn btn-light">
                                        <i class="mdi mdi-account-edit me-1"></i> Edit Profile
                                    </a>
                                </div>
                            </div> <!-- end col-->
                        </div> <!-- end row -->

                    </div> <!-- end card-body/ profile-user-box-->
                </div>
                <!--end profile/ card -->
            </div> <!-- end col-->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-sm-12">
                <!-- Personal-Information -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-3">faq Information</h4>
                        {{-- <p class="text-muted font-13">
                            {{ $faq->lawyerDetail->bio_fr }}
                        </p> --}}

                        <hr />

                        <div class="text-start">
                            <p class="text-muted"><strong>Question :</strong> <span
                                    class="ms-2">{{ $faq->question_fr }}</span></p>

                            <p class="text-muted"><strong>Repense :</strong><span
                                    class="ms-2">{{ $faq->answer_fr }}</span></p>
                        </div>
                        <div class="text-end">
                            <div dir="rtl">
                                <p dir="rtl" class="text-muted"><strong> سؤال</strong> <span
                                    class="ms-2">{{ $faq->question_ar }}</span></p>

                                <p dir="rtl" class="text-muted"><strong> الجواب </strong> <span
                                    class="ms-2">{{ $faq->answer_ar }}</span></p>
                            </div>
                        </div>

                        <div class="text-start">
                            @if ($faq->is_published)
                            <a href="{{ route("admin.faqs.desactive", $faq->id ) }}" class="btn btn-outline-danger rounded-pill">
                                <i class="mdi mdi-eye-off-outline"></i> Desactive
                            </a>
                            @else
                                <a href="{{ route("admin.faqs.active", $faq->id ) }}" class="btn btn-outline-success rounded-pill">
                                    <i class="mdi mdi-eye"></i> Active
                                </a>
                            @endif
                        </div>
                    </div>
                </div>

            </div> <!-- end col-->

            <!-- end col -->

        </div>
        <!-- end row -->

    </div> <!-- container -->


</x-dashboard.admin.master>
