<x-dashboard.admin.master title="Information d'Avocats">

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
                                            @if (!!$avocat->profile_image)
                                                <img src="{{ asset( $avocat->profile_image) }}"
                                                    alt="image" class="rounded-circle img-thumbnail avatar-lg">
                                            @else
                                                <img src="{{ asset('images/dashboard/users/profile_default.jpg') }}"
                                                    alt="image" class="rounded-circle img-thumbnail avatar-lg">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <h4 class="mt-1 mb-1 text-muted">
                                                {{ $avocat->first_name . ' ' . $avocat->last_name }}</h4>
                                            <p class="font-13 text-muted-50">
                                            <h3>
                                                @if ($avocat->lawyerDetail->is_premium)
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
                                    <a href="{{ route('admin.avocats.edit', $avocat->id) }}" class="btn btn-light">
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
                        <h4 class="header-title mt-0 mb-3">Avocat Information</h4>
                        <p class="text-muted font-13">
                            {{ $avocat->lawyerDetail->bio_fr }}
                        </p>

                        <hr />

                        <div class="text-start">
                            <p class="text-muted"><strong>Nom Complet :</strong> <span
                                    class="ms-2">{{ $avocat->first_name . ' ' . $avocat->last_name }}</span></p>

                            <p class="text-muted"><strong>Mobile :</strong><span
                                    class="ms-2">{{ $avocat->lawyerDetail->phone_number }}</span></p>

                            <p class="text-muted"><strong>Email :</strong> <span
                                    class="ms-2">{{ $avocat->email }}</span></p>

                            <p class="text-muted"><strong>Numero Tele :</strong> <span
                                    class="ms-2">{{ $avocat->lawyerDetail->phone_number }}</span></p>
                            <p class="text-muted"><strong>Address :</strong> <span
                                class="ms-2">{{ $avocat->lawyerDetail->address }}</span></p>

                            <p class="text-muted mb-0" id="tooltip-container"><strong>Social media :</strong>
                                <a href="{{ $avocat->lawyerDetail->phone_number }}" target="_blank"
                                    class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container"
                                    data-bs-placement="top" data-bs-toggle="tooltip" href="" title="whatsapp">
                                    <i class="mdi mdi-whatsapp"></i>
                                </a>
                                <a href="{{ $avocat->lawyerDetail->whatsapp_link }}"
                                    class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container"
                                    data-bs-placement="top" data-bs-toggle="tooltip" href="" title="linkedin">
                                    <i class="mdi mdi-linkedin"></i>
                                </a>
                            </p>
                            <div class="mt-3" id="hide">
                                <a onclick="window.print()" class="btn btn-outline-primary rounded-pill">
                                    <i class="mdi mdi-printer-outline  me-1"></i> Imprimer
                                </a>
                                <a class="btn btn-outline-danger rounded-pill"
                                    onclick="deleteAvocat({{ $avocat->id }})"  style="cursor: pointer"><i
                                    class="mdi mdi-delete email-action-icons-item ms-1"></i> Supprimer</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div> <!-- end col-->

            <div class="col-sm-12">

                <!-- Chart-->
                {{-- <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Orders & Revenue</h4>
                        <div dir="ltr">
                            <div style="height: 260px;" class="chartjs-chart">
                                <canvas id="high-performing-product"></canvas>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- End Chart-->

                <div class="row">
                    <div class="col-sm-4">
                        <div class="card tilebox-one">
                            <div class="card-body">
                                <i class="ri-shopping-basket-2-line float-end text-muted"></i>
                                <h6 class="text-muted text-uppercase mt-0">Total Blogs</h6>
                                <h2 class="m-b-20">{{ $avocat->lawyerBlog === null ? 0 : $avocat->lawyerBlog->count() }}</h2>
                            </div> <!-- end card-body-->
                        </div>
                        <!--end card-->
                    </div><!-- end col -->

                    <div class="col-sm-4">
                        <div class="card tilebox-one">
                            <div class="card-body">
                                <i class="ri-archive-line float-end text-muted"></i>
                                <h6 class="text-muted text-uppercase mt-0">Total Mails</h6>
                                <h2 class="m-b-20">{{ $avocat->lawyerMail === null ? 0 : $avocat->lawyerMail->count() }}</h2>
                            </div> <!-- end card-body-->
                        </div>
                        <!--end card-->
                    </div><!-- end col -->

                    <div class="col-sm-4">
                        <div class="card tilebox-one">
                            <div class="card-body">
                                <i class="ri-vip-diamond-line float-end text-muted"></i>
                                <h6 class="text-muted text-uppercase mt-0">Total FAQ</h6>
                                <h2 class="m-b-20">{{ $avocat->lawyerfaq === null ? 0 : $avocat->lawyerfaq->count() }}</h2>
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

        <div class="modal fade" id="deleteAvocatModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Supprimer Avocat</h5>

                        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Voulez-vous vraiment supprimer cet avocat ?</p>
                        <small class="font-weight-bold" style="color:#edb200;">
                            <i class="fas fa-exclamation-triangle"></i>
                            Cette action ne peut pas être annulée !
                        </small>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>

                            <form id="deleteAvocatForm" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Supprimer" class="btn btn-danger">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        function deleteAvocat(id) {
            $('#deleteAvocatModal').modal('toggle'); // taffichage modal
            $('#deleteAvocatForm').attr('action', '/admin/avocats/delete/' + id); //nhd id fl form #deleteStudentForm
        }
    </script>
</x-dashboard.admin.master>
