<x-dashboard.lawyer.master title="Information d'Avocats">

    <!-- Start Content-->
    <div class="container-fluid">



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
                                            <img src="{{ asset($lawyer->user->profile_image) }}"
                                                alt="" class="rounded-circle img-thumbnail avatar-lg">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <h4 class="mt-1 mb-1 text-muted">
                                                {{ $lawyer->user->first_name . ' ' . $lawyer->user->last_name }}</h4>
                                            <p class="font-13 text-muted-50">
                                            <h3>
                                                @if ($lawyer->is_premium)
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
                                <div class="text-center mt-sm-0 mt-3 text-sm-end" id="hide">
                                    {{-- {{ route('lawyer.avocats.edit', $lawyer->user->id) }} --}}
                                    <a href="{{ route("lawyer.settings.show") }}" class="btn btn-light">
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
                        <h4 class="header-title mt-0 mb-3">Avocat Information :</h4>
                        <p class="text-muted font-13">
                            {{ $lawyer->bio_fr }}
                        </p>

                        <h4 dir="rtl" class="header-title mt-0 mb-3">معلومات المحامي :</h4>
                        <p dir="rtl" class="text-muted font-13">
                            {{ $lawyer->bio_ar }}
                        </p>

                        <hr />

                        <div class="text-start">
                            <p class="text-muted"><strong>Nom Complet :</strong> <span
                                    class="ms-2">{{ $lawyer->user->first_name . ' ' . $lawyer->user->last_name }}</span></p>
                        </div>

                        <div class="text-end">
                            <p class="text-muted"><span class="ms-2">{{ $lawyer->prenom_ar . ' ' . $lawyer->nom_ar }}</span><strong > : الاسم الكامل </strong> </p>
                        </div>

                        <div class="text-start">
                            <p class="text-muted"><strong>Mobile :</strong><span
                                    class="ms-2">{{ $lawyer->phone_number }}</span></p>
                            <p class="text-muted"><strong>Email :</strong> <span
                                    class="ms-2">{{ $lawyer->user->email }}</span></p>

                            <p class="text-muted"><strong>Numero Tele :</strong> <span
                                    class="ms-2">{{ $lawyer->phone_number }}</span></p>
                            <p class="text-muted"><strong>Address :</strong> <span
                                class="ms-2">{{ $lawyer->address }}</span></p>

                            <p class="text-muted mb-0" id="tooltip-container"><strong>Social media :</strong>
                                <a href="{{ $lawyer->phone_number }}" target="_blank"
                                    class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container"
                                    data-bs-placement="top" data-bs-toggle="tooltip" href="" title="whatsapp">
                                    <i class="mdi mdi-whatsapp"></i>
                                </a>
                                <a href="{{ $lawyer->whatsapp_link }}"
                                    class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container"
                                    data-bs-placement="top" data-bs-toggle="tooltip" href="" title="linkedin">
                                    <i class="mdi mdi-linkedin"></i>
                                </a>
                            </p>
                            <div class="mt-3" id="hide">
                                <a onclick="window.print()" class="btn btn-outline-primary rounded-pill">
                                    <i class="mdi mdi-printer-outline  me-1"></i> Imprimer
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end col-->

            <div class="col-sm-12">

                <div class="row">
                    <div class="col-sm-4">
                        <div class="card tilebox-one">
                            <div class="card-body">
                                <i class="ri-shopping-basket-2-line float-end text-muted"></i>
                                <h6 class="text-muted text-uppercase mt-0">Total Blogs</h6>
                                <h2 class="m-b-20">{{ $lawyer->user->lawyerBlog === null ? 0 : $lawyer->user->lawyerBlog->count()  }}</h2>
                            </div> <!-- end card-body-->
                        </div>
                        <!--end card-->
                    </div><!-- end col -->

                    <div class="col-sm-4">
                        <div class="card tilebox-one">
                            <div class="card-body">
                                <i class="ri-archive-line float-end text-muted"></i>
                                <h6 class="text-muted text-uppercase mt-0">Total Mails</h6>
                                <h2 class="m-b-20">{{ $lawyer->user->lawyerMail === null ? 0 : $lawyer->user->lawyerMail->count() }}</h2>
                            </div> <!-- end card-body-->
                        </div>
                        <!--end card-->
                    </div><!-- end col -->

                    <div class="col-sm-4">
                        <div class="card tilebox-one">
                            <div class="card-body">
                                <i class="ri-vip-diamond-line float-end text-muted"></i>
                                <h6 class="text-muted text-uppercase mt-0">Total FAQ</h6>
                                <h2 class="m-b-20">{{ $lawyer->user->lawyerfaq === null ? 0 : $lawyer->user->lawyerfaq->count() }}</h2>
                            </div> <!-- end card-body-->
                        </div>
                        <!--end card-->
                    </div><!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end col -->

        </div>
        <!-- end row -->
    </div>
</x-dashboard.lawyer.master>
