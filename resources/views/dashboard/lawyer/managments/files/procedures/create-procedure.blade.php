
<x-dashboard.lawyer.master title="{{ __('client.AddProcedure') }}">


    <div class=" {{ session()->get('locale') === 'ar' ? 'text-right' : 'text-left' }}" dir="{{ session()->get('locale') === 'ar' ? 'rtl' : 'ltr' }}">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">{{ __('client.AddProcedure') }}</h4>
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
                                            <h4 style="border-bottom: 1px solid #eee;" class="header-title mt-2 pb-2 text-center mb-3" >
                                                {{ __('client.AddProcedureClient') }} : {{ $file->client->client_name }}
                                            </h4>
                                            <form method="POST" action="{{ route("lawyer.procedures.store",$file->id) }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="title" class="form-label">{{ __('client.title') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('title') is-invalid @enderror"
                                                                type="text"
                                                                name="title" value="{{ old("title") }}" placeholder="{{ __('client.title') }}"
                                                                id="title" />
                                                            @error('title')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="date_debut" class="form-label">{{ __('client.startDate') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('date_debut') is-invalid @enderror"
                                                                type="datetime-local"
                                                                name="date_debut" value="{{ old("date_debut") }}" placeholder="{{ __('client.startDate') }}"
                                                                id="date_debut" />
                                                            @error('date_debut')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="date_fin" class="form-label">{{ __('client.endDate') }}<span class="text-danger">*</span></label>
                                                            <input class="form-control @error('date_fin') is-invalid @enderror"
                                                                type="datetime-local"
                                                                name="date_fin" value="{{ old("date_fin") }}" placeholder="{{ __('client.endDate') }}"
                                                                id="date_fin" />
                                                            @error('date_fin')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="description" class="form-label">{{ __('client.description') }}<span class="text-danger">*</span></label>
                                                            <textarea rows="5" class="form-control @error('description') is-invalid @enderror"
                                                                name="description" placeholder="{{ __('client.description') }}"
                                                                id="description" >{{ old("description") }}</textarea>
                                                            @error('description')
                                                                <div class="alert text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>


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


</x-dashboard.admin.master >
