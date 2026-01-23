<x-dashboard.lawyer.master title="Modification de Compétence">


    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Profile</a></li>
                            <li class="breadcrumb-item active">Modification de Compétence</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Modification de Compétence</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Modification de Compétence</h4>

                        <div class="tab-content">
                            <div class="tab-pane show active" id="input-types-preview">
                                <form action="{{ route("lawyer.settings.update.expertise",$expertise->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method("PUT")
                                    <div class="row mb-3">
                                        <div class="col-lg-12">
                                            <div class="mb-3 mt-3">
                                                <div class="d-flex">
                                                    <label for="switch4" class="form-label col-3">Car accident :</label>
                                                    <input type="checkbox" name="car_accident" class="col-3"
                                                        {{ $expertise->car_accident === 1 ? "checked" : "" }}
                                                        id="car_accident" data-switch="info"/>
                                                        <label for="car_accident" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex">
                                                    <label for="switch4" class="form-label col-3">business law :</label>
                                                    <input type="checkbox" name="business_law" class="col-3"
                                                        {{ $expertise->business_law === 1 ? "checked" : "" }}
                                                        id="business_law" data-switch="info"/>
                                                        <label for="business_law" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex">
                                                    <label for="switch4" class="form-label col-3">civil litigation :</label>
                                                    <input type="checkbox" name="civil_litigation" class="col-3"
                                                    {{ $expertise->civil_litigation === 1 ? "checked" : "" }}
                                                    id="civil_litigation" data-switch="info"/>
                                                    <label for="civil_litigation" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex">
                                                    <label for="switch4" class="form-label col-3">insurance defence :</label>
                                                    <input type="checkbox" name="insurance_defence" class="col-3"
                                                    {{ $expertise->insurance_defence === 1 ? "checked" : "" }}
                                                    id="insurance_defence" data-switch="info"/>
                                                    <label for="insurance_defence" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="d-flex">
                                                    <label for="switch4" class="form-label col-3">employment law :</label>
                                                    <input type="checkbox" name="employment_law" class="col-3"
                                                    {{ $expertise->employment_law === 1 ? "checked" : "" }}
                                                    id="employment_law" data-switch="info"/>
                                                    <label for="employment_law" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="d-flex">
                                                    <label for="switch4" class="form-label col-3">business litigation :</label>
                                                    <input type="checkbox" name="business_litigation" class="col-3"
                                                        {{ $expertise->business_litigation === 1 ? "checked" : "" }}
                                                        id="business_litigation" data-switch="info"/>
                                                    <label for="business_litigation" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex">
                                                    <label for="switch4" class="form-label col-3">workers law :</label>
                                                    <input type="checkbox" name="workers_law" class="col-3"
                                                    {{ $expertise->workers_law === 1 ? "checked" : "" }}
                                                    id="workers_law" data-switch="info"/>
                                                    <label for="workers_law" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex">
                                                    <label for="switch4" class="form-label col-3">Family law :</label>
                                                    <input type="checkbox" name="family_law" class="col-3"
                                                    {{ $expertise->family_law === 1 ? "checked" : "" }}
                                                    id="family_law" data-switch="info"/>
                                                    <label for="family_law" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->


                                    </div>
                                    <!-- end row-->
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
                            </div> <!-- end preview-->


                        </div> <!-- end tab-content-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->




    </div> <!-- container -->

    </x-dashboard.lawyer.master>
